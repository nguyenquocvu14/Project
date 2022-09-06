import React, { Component } from "react";
import { connect } from "react-redux";
import { push } from "connected-react-router";
import * as actions from "../../store/actions";
import "./Login.scss";
import { FormattedMessage } from "react-intl";
import { handleLoginApi } from "../../services/userServices";

class Login extends Component {
  constructor(props) {
    super(props);
    this.state = {
      username: "",
      password: "",
      isShowPassword: false,
      errMessage: "",
    };
  }
  handleOnchangeUsername = (e) => {
    this.setState({
      username: e.target.value,
    });
  };

  handleOnchangePassword = (e) => {
    this.setState({
      password: e.target.value,
    });
  };
  //xu li login va goi API
  handleSubmit = async () => {
    //truoc moi lan login xoa ma loi
    this.setState({
      errMessage: "",
    });
    try {
      //Lay pass và user người dùng
      let data = await handleLoginApi(this.state.username, this.state.password);

      if (data && data.errCode !== 0) {
        this.setState({
          errMessage: data.message,
        });
      }
      if (data && data.errCode === 0) {
        let show = this.props.userLoginSuccess(data.user); //Chua giai thich
        // console.log("checkkkkk", show);
      }
      //
    } catch (error) {
      if (error.response) {
        if (error.response.data) {
          this.setState({
            errMessage: error.response.data.message,
          });
        }
      }
      console.log("check", error);
    }
  };
  //
  handleShowHidePassword = () => {
    this.setState({
      isShowPassword: !this.state.isShowPassword,
    });
  };
  render() {
    return (
      <div className="login-background">
        <div className="login-container">
          <div className="login-content row">
            <div className="col-12 text-login">Login</div>

            <div className="col-12 form-group login-input">
              <label>UserName</label>
              <input
                type="text"
                className="form-control"
                placeholder="Enter Your Username"
                value={this.state.username}
                onChange={(e) => {
                  this.handleOnchangeUsername(e);
                }}
              />
            </div>

            <div className="col-12 form-group  login-input">
              <div className="custom-input-password">
                <label>PassWord</label>
                <input
                  type={this.state.isShowPassword ? "text" : "password"}
                  className="form-control"
                  placeholder="Enter Your Password"
                  value={this.state.password}
                  onChange={(e) => {
                    this.handleOnchangePassword(e);
                  }}
                />
                <span
                  onClick={() => {
                    this.handleShowHidePassword();
                  }}
                >
                  <i className={this.state.isShowPassword ? "fa fa-eye" : " fa fa-eye-slash"}></i>
                </span>
              </div>
            </div>
            <div className="col-12" style={{ color: "red" }}>
              {this.state.errMessage}
            </div>
            <div className="col-12 ">
              <button
                type="submit"
                className="btn-login"
                onClick={() => {
                  this.handleSubmit();
                }}
              >
                Log in
              </button>
            </div>

            <div className="col-12">
              <span>Forgot Your PassWord</span>
            </div>
            <div className="col-12">
              <span className="text-other-login ">Or login with</span>
            </div>
            <div className="col-12 social-login">
              <i className="fab fa-google-plus-g google"></i>
              <i className="fab fa-facebook-f facebook"></i>
            </div>
          </div>
        </div>
      </div>
    );
  }
}

const mapStateToProps = (state) => {
  return {
    lang: state.app.language,
  };
};

const mapDispatchToProps = (dispatch) => {
  return {
    navigate: (path) => dispatch(push(path)),
    // userLoginFail: () => dispatch(actions.adminLoginFail()),
    userLoginSuccess: (userInfo) => dispatch(actions.userLoginSuccess(userInfo)),
  };
};

export default connect(mapStateToProps, mapDispatchToProps)(Login);
