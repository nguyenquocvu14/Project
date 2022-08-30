import React, { Component } from "react";
import { FormattedMessage } from "react-intl";
import { connect } from "react-redux";
import { Button, Modal, ModalHeader, ModalBody, ModalFooter } from "reactstrap";
class ModalUser extends Component {
  constructor(props) {
    super(props);
    this.state = {
      email: "",
      password: "",
      firstName: "",
      lastName: "",
      address: "",
    };
  }
  componentDidMount() {}
  toggle = () => {
    let check = this.props.toggleFromParent();
  };
  handleOnchangeInput = (event, id) => {
    //   this.state[id] = event.target.value;
    //   this.setState(
    //     {
    //       ...this.state,
    //     },
    //     () => {
    //       console.log("checkk>>44", this.state[id]);
    //     }
    //   );
    //bad good luu gia tri state
    let copyState = { ...this.state };
    // console.log("copystae", copyState);
    let copy = (copyState[id] = event.target.value);
    // console.log("copy", copy);
    this.setState({
      ...copyState,
    });
  };
  // input
  checkValidateInput = () => {
    let isValid = true;
    let arrInput = ["email", "password", "firstName", "lastName", "address"];
    for (let i = 0; i < arrInput.length; i++) {
      console.log("arrinput>>>", this.state[arrInput[i]]);
      if (!this.state[arrInput[i]]) {
        isValid = false;
        alert("Missing paramters", arrInput[i]);
        break;
      }
    }
    return isValid;
  };
  //
  handleAddNewUser = () => {
    let isValid = this.checkValidateInput();
    // console.log("isvaild", isValid);
    if (isValid === true) {
      //goi api
      this.props.createNewUser(this.state);
      //  console.log("check>>>>>>", this.state);
      this.setState({
        email: "",
        password: "",
        firstName: "",
        lastName: "",
        address: "",
      });
    }
  };

  render() {
    return (
      <Modal
        isOpen={this.props.isOpen}
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
          Create new user
        </ModalHeader>
        <ModalBody>
          <div className="row">
            <form action="/post-crud" method="POST">
              <h1>create new user</h1>

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
          <Button
            color="primary"
            onClick={() => {
              this.handleAddNewUser();
            }}
          >
            Add New
          </Button>
          <Button
            color="secondary"
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

export default connect(mapStateToProps, mapDispatchToProps)(ModalUser);
