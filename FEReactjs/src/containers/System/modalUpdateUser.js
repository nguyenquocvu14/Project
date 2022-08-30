import React, { Component } from "react";
import { FormattedMessage } from "react-intl";
import { connect } from "react-redux";
import { Button, Modal, ModalHeader, ModalBody, ModalFooter } from "reactstrap";
import _ from "lodash";
class modalUpdateUser extends Component {
 constructor(props) {
  super(props);
  this.state = { id: "", email: "", password: "", firstName: "", lastName: "", address: "" };
 }

 componentDidMount() {
  let users = this.props.editUser;
  if (users && !_.isEmpty(users)) {
   this.setState({
    id: users.id,
    email: users.email,
    password: "123456",
    firstName: users.firstName,
    lastName: users.lastName,
    address: users.address,
   });
  }
 }

 handleOnchangeInput = (event, id) => {
  //bad good luu gia tri state
  let copyState = { ...this.state };
  // console.log("copystae", copyState);
  let copy = (copyState[id] = event.target.value);
  // console.log("copy", copy);
  this.setState({
   ...copyState,
  });
 };
 toggle = () => {
  this.props.toggleUpdateUser();
 };

 handleSaveUser = () => {
  //goi api edituser
  this.props.editUsers(this.state);

  //  console.log("check>>>>>>", this.state);
 };

 render() {
  return (
   <Modal
    isOpen={this.props.UpdateUser}
    toggle={() => {
     this.toggle();
    }}
    className="modalUser"
    size="lg"
    // centered
   >
    <ModalHeader
     toggle={() => {
      this.toggle();
     }}
    >
     Update new user
    </ModalHeader>
    <ModalBody>
     <div className="row">
      <form>
       <h1>Update new user</h1>

       <div className="form-row d-flex justify-content-between">
        <div className="form-group col-md-5">
         <label>Email</label>
         <input
          type="email"
          className="form-control"
          placeholder="Email"
          onChange={(event) => {
           this.handleOnchangeInput(event, "email");
          }}
          value={this.state.email}
          disabled
         />
        </div>
        <div className="form-group col-md-5">
         <label>Password</label>
         <input
          type="password"
          className="form-control"
          placeholder="Password"
          onChange={(event) => {
           this.handleOnchangeInput(event, "password");
          }}
          value={this.state.password}
          disabled
         />
        </div>
       </div>
       <div className="form-row d-flex justify-content-between">
        <div className="form-group col-md-5">
         <label>First Name</label>
         <input
          type="text"
          className="form-control"
          placeholder="Firstname"
          onChange={(event) => {
           this.handleOnchangeInput(event, "firstName");
          }}
          value={this.state.firstName}
         />
        </div>
        <div className="form-group col-md-5">
         <label>Last Name</label>
         <input
          type="text"
          className="form-control"
          placeholder="LastName"
          onChange={(event) => {
           this.handleOnchangeInput(event, "lastName");
          }}
          value={this.state.lastName}
         />
        </div>
       </div>
       <div className="form-group">
        <label>Address</label>
        <input
         type="text"
         className="form-control"
         placeholder="1234 Main St"
         onChange={(event) => {
          this.handleOnchangeInput(event, "address");
         }}
         value={this.state.address}
        />
       </div>
      </form>
     </div>
    </ModalBody>
    <ModalFooter>
     <Button color="primary" className=" px-3" onClick={() => this.handleSaveUser()}>
      Update
     </Button>
     <Button
      color="secondary"
      className="px-3"
      onClick={() => {
       this.toggle();
      }}
     >
      Close
     </Button>
    </ModalFooter>
   </Modal>
  );
 }
}

const mapStateToProps = (state) => {
 return {};
};

const mapDispatchToProps = (dispatch) => {
 return {};
};

export default connect(mapStateToProps, mapDispatchToProps)(modalUpdateUser);
