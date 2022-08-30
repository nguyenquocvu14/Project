import React, { Component } from "react";
import { FormattedMessage } from "react-intl";
import { connect } from "react-redux";
import "./UserMannage.scss";
import { getAllUser, createNewUserService, deleteUserServices, editUserServices } from "../../services/userServices";
import ModalUser from "./modalsUser";
import ModalUpdateUser from "./modalUpdateUser";
class UserManage extends Component {
 constructor(props) {
  super(props);
  this.state = {
   arrUsers: [],
   isOpenModalUser: false,
   UpdateUser: false,
   editUser: {},
  };
 }

 async componentDidMount() {
  await this.getAllUserFromReact();
  // console.log("data>>>", this.state.arrUsers);
 }
 getAllUserFromReact = async () => {
  let res = await getAllUser("ALL");
  if (res && res.errCode === 0) {
   this.setState({
    arrUsers: res.users,
   });
  }
 };
 //show user modal
 handleNewUser = () => {
  this.setState({
   isOpenModalUser: true,
  });
 };
 //show update user
 handleUpdateUser = (user) => {
  this.setState({
   UpdateUser: true,
   editUser: user,
  });
 };
 //xet show hide modal update
 toggleUpdateUser = () => {
  this.setState({
   UpdateUser: !this.state.UpdateUser,
  });
 };
 //xet show hide modal
 toggleUserModal = () => {
  this.setState({
   isOpenModalUser: !this.state.isOpenModalUser,
  });
 };
 //create user
 createNewUser = async (data) => {
  console.log("data", data);
  try {
   let res = await createNewUserService(data);
   if (res && res.errCode !== 0) {
    alert(res.errMessage);
   } else {
    await this.getAllUserFromReact();
    this.setState({
     isOpenModalUser: false,
    });
   }
  } catch (e) {
   console.log(e);
  }
 };
 //delete user
 handleDeleteUser = async (id) => {
  // console.log("checkid>>", id);
  try {
   let res = await deleteUserServices(id);
   console.log("checkdelete>>>", res);
   if (res && res.errCode !== 0) {
    alert(res.errMessage);
   } else {
    await this.getAllUserFromReact();
    // alert("Thanh cong");
   }
  } catch (e) {
   console.log(e);
  }
 };
 //edit User
 doEditUser = async (data) => {
  console.log("check", data);
  // let id = data.id;
  // console.log("chekkkid", id);
  try {
   let res = await editUserServices(data);
   console.log(res);
   if (res && res.errCode !== 0) {
    alert(res.errMessage);
   } else {
    await this.getAllUserFromReact();
    this.setState({
     UpdateUser: false,
    });
   }
  } catch (e) {
   console.log(e);
  }
 };
 render() {
  let arrUsers = this.state.arrUsers;
  return (
   <div className="user-container">
    <ModalUser isOpen={this.state.isOpenModalUser} toggleFromParent={this.toggleUserModal} createNewUser={this.createNewUser} />
    {this.state.UpdateUser && <ModalUpdateUser UpdateUser={this.state.UpdateUser} toggleUpdateUser={this.toggleUpdateUser} editUser={this.state.editUser} editUsers={this.doEditUser} />}

    <div className="title text-center">Mannger User</div>
    <div>
     <button
      className="btn btn-primary px-3"
      onClick={() => {
       this.handleNewUser();
      }}
     >
      <i className="fas fa-plus"></i>Add New User
     </button>
    </div>

    <table id="customers">
     <thead>
      <tr>
       <th>Email</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Address</th>
       <th>Action</th>
      </tr>
     </thead>
     <tbody>
      {arrUsers &&
       arrUsers.length > 0 &&
       arrUsers.map((item, index) => {
        return (
         <tr key={index + 1}>
          <td>{item.email}</td>
          <td>{item.firstName}</td>
          <td>{item.lastName}</td>
          <td>{item.address}</td>
          <td>
           <button className="btn-icon">
            <i className="fas fa-pencil-alt" onClick={() => this.handleUpdateUser(item)}></i>
           </button>
           <button
            className="btn-icon"
            onClick={() => {
             this.handleDeleteUser(item.id);
            }}
           >
            <i className="fas fa-trash"></i>
           </button>
          </td>
         </tr>
        );
       })}
     </tbody>
    </table>
   </div>
  );
 }
}

const mapStateToProps = (state) => {
 return {};
};

const mapDispatchToProps = (dispatch) => {
 return {};
};

export default connect(mapStateToProps, mapDispatchToProps)(UserManage);
