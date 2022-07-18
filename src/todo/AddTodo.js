import React from "react";
import "./ListTodo.scss";
import { toast } from "react-toastify";

class AddTodo extends React.Component {
  state = {
    title: "",
  };

  //Lay Du Lieu Ra
  handleOnchange = (event) => {
    this.setState({
      title: event.target.value,
    });
  };
  //Them Du Lieu Them Vao
  handleOnclick = () => {
    if (this.state.title == "") {
      toast.error("Wow so easy!");
      return;
    }
    let todo = {
      id: Math.floor(Math.random() * 1000),
      title: this.state.title,
    };
    this.props.addNewtodo(todo);
    //Cap Nhat Lai Trang Thai
    this.setState({
      title: "",
    });
  };

  render() {
    return (
      <div className="add-todo">
        <label>UserName : {this.state.title}</label>
        <input type="text" value={this.state.title} onChange={(event) => this.handleOnchange(event)} />
        <button onClick={() => this.handleOnclick()}>Add</button>
      </div>
    );
  }
}
export default AddTodo;
