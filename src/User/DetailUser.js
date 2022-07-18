import React from "react";
import { withRouter } from "react-router-dom";
import axios from "axios";
class DetailUser extends React.Component {
  state = {
    user: {},
  };
  async componentDidMount() {
    if (this.props.match && this.props.match.params) {
      let id = this.props.match.params.id;
      let response = await axios.get(`https://reqres.in/api/users/${id}`);
      this.setState({
        user: response && response.data && response.data.data ? response.data.data : {},
      });
      //   console.log(response);
    }
  }

  handleBlack = () => {
    this.props.history.push("/user"); //lùi về trang user
  };
  render() {
    let { user } = this.state;
    let isEmptyObj = Object.keys(user).length === 0; //kiem tra dữ  liệu object có rỗng không

    return (
      <>
        <div>View Detail User</div>
        {isEmptyObj == false && (
          <>
            <div>
              name:{user.first_name} - {user.last_name}
            </div>
            <div>email:{user.email}</div>
            <div>
              <img src={user.avatar} />
            </div>
            <div>
              <button onClick={() => this.handleBlack()}>Black</button>
            </div>
          </>
        )}
      </>
    );
  }
}
export default withRouter(DetailUser);
