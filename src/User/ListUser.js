import React from "react";
import axios from "axios";
import "./ListUser.scss";
import { withRouter } from "react-router-dom";
class ListUser extends React.Component {
  state = {
    ListUsers: [],
  };
  async componentDidMount() {
    let response = await axios.get("https://reqres.in/api/users?page=2");
    this.setState({
      ListUsers: response && response.data && response.data.data ? response.data.data : [],
    });
  }
  //xu li Onclick để gửi đến trang user /id User
  handleViewDetailUser = (user) => {
    this.props.history.push(`/user/${user.id}`);
  };
  render() {
    // let user = this.state.ListUsers;
    let { ListUsers } = this.state;
    return (
      <div className="list-user-container">
        <div className="title">Fetch all list user</div>
        <div className="list-user-conntent">
          {ListUsers &&
            ListUsers.length > 0 &&
            ListUsers.map((item, index) => {
              return (
                <div className="child" key={item.id} onClick={() => this.handleViewDetailUser(item)}>
                  {index + 1} - {item.first_name} - {item.last_name}
                </div>
              );
            })}
        </div>
      </div>
    );
  }
}
export default withRouter(ListUser);
