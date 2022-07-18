import React from "react";
import AddTodo from "./AddTodo";
import "./ListTodo.scss";
import { toast } from "react-toastify";

class ListTodo extends React.Component {
  state = {
    listTodos: [
      {
        id: "1",
        title: "Javascript",
      },
      {
        id: "2",
        title: "Ruby",
      },
      {
        id: "3",
        title: "PyThon",
      },
    ],
    // //Chuc Nang Sua
    editTodo: {},
  };
  handleEditTodos = (event) => {
    const copyTodo = { ...this.state.editTodo };
    copyTodo.title = event.target.value;
    this.setState({
      editTodo: copyTodo,
    });
    // console.log(copyTodo);
  };
  // //Chuc Nang Sua
  handleEdit = (todo) => {
    console.log(todo);
    const { editTodo, listTodos } = this.state;
    let isEmptyObj = Object.keys(editTodo).length === 0;
    //SAVE
    if (isEmptyObj === false && editTodo.id === todo.id) {
      let listTodoCopy = [...listTodos];
      let objIndex = listTodoCopy.findIndex((item) => item.id === todo.id);

      //Update object's name property.
      listTodoCopy[objIndex].title = editTodo.title;
      this.setState({
        ListTodos: listTodoCopy,
        editTodo: {},
      });
      toast.success("Update Todo success!");
      return;
    }

    //Edit;
    this.setState({
      editTodo: todo,
    });
  };

  //Chuc Nang Them Vao
  addNewtodo = (todo) => {
    this.setState({
      listTodos: [...this.state.listTodos, todo],
    });
    toast.success("Wow so easy!");
  };
  //Chuc Nang Xoa
  handleDelete = (todo) => {
    let currentTodo = this.state.listTodos;
    currentTodo = currentTodo.filter((item) => {
      return item.id !== todo.id;
    });
    this.setState({
      listTodos: currentTodo,
    });
    toast.success("Delete Success!");
    // console.log(currentTodo);
  };

  render() {
    const { listTodos } = this.state;
    const { editTodo } = this.state;
    let isEmptyObj = Object.keys(editTodo).length === 0;
    console.log(isEmptyObj);
    // -------------------------------------------
    return (
      <div className="list-todo-container">
        {/* Them AddTodo */}
        <AddTodo addNewtodo={this.addNewtodo} />
        <div className="list-todo-content">
          {listTodos &&
            listTodos.length > 0 &&
            listTodos.map((item, index) => {
              return (
                <div className="todo-child" key={item.id}>
                  {isEmptyObj === true ? (
                    <span>
                      {index + 1} - {item.title}
                    </span>
                  ) : (
                    <>
                      {editTodo.id === item.id ? (
                        <span>
                          {index + 1} - <input value={editTodo.title} onChange={(event) => this.handleEditTodos(event)} />
                        </span>
                      ) : (
                        <span>
                          {index + 1} - {item.title}
                        </span>
                      )}
                    </>
                  )}

                  <button onClick={() => this.handleEdit(item)}>{isEmptyObj === false && editTodo.id === item.id ? "Save" : "Edit"}</button>
                  <button onClick={() => this.handleDelete(item)}>Delete</button>
                </div>
              );
            })}
        </div>
      </div>
    );
  }
}
export default ListTodo;
