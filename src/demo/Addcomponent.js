import React from "react";
class Addcomponent extends React.Component {
  state = {
    title: "",
    salary: "",
  };
  handletitle = (event) => {
    this.setState({
      title: event.target.value,
    });
  };
  handlesalary = (event) => {
    this.setState({
      salary: event.target.value,
    });
  };
  handleSubmit = (event) => {
    event.preventDefault();
    console.log(this.state);
    if (!this.state.title || !this.state.salary) {
      alert("vui long nhap thong tin");
      return;
    }
    this.props.addNewjob({
      id: Math.floor(Math.random() * 1001),
      title: this.state.title,
      salary: this.state.salary,
    });

    this.setState({
      title: "",
      salary: "",
    });
  };

  render() {
    return (
      <React.Fragment>
        <form>
          <label htmlFor="fname">title:{this.state.title}</label>
          <br />
          <input
            type="text"
            value={this.state.title}
            onChange={(event) => this.handletitle(event)}
          />
          <br />
          <label htmlFor="lname">salary:{this.state.salary}</label>
          <br />
          <input
            type="text"
            value={this.state.salary}
            onChange={(event) => this.handlesalary(event)}
          />
          <br />
          <br />
          <input type="submit" onClick={(event) => this.handleSubmit(event)} />
        </form>
      </React.Fragment>
    );
  }
}

export default Addcomponent;
