import React from "react";
import { withRouter } from "react-router";
class Home extends React.Component {
  // componentDidMount() {
  //   setTimeout(() => {
  //     this.props.history.push("/todos");
  //   }, 3000);
  // }

  render() {
    return <div>Trang Chu</div>;
  }
}
export default withRouter(Home);
