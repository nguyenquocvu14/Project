const Todo = (props) => {
  //   let todos = props.todo;
  const { todo, title, deleteTodo } = props;
  // console.log(todo);

  const handleDelete = (id) => {
    deleteTodo(id);
  };
  return (
    <div className="todos_container">
      <div className="title">{title}</div>
      {todo &&
        todo.length > 0 &&
        todo.map((todo) => {
          return (
            <div className="content" key={todo.id}>
              <li className="child">
                {todo.title} <span onClick={() => handleDelete(todo.id)}>X</span>
              </li>
            </div>
          );
        })}
      <hr />
    </div>
  );
};
export default Todo;
