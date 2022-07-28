import logo from "./logo.svg";
import "./App.css";
import Nav from "./views/Nav";
import { useState, useEffect } from "react";
import Home from "./Todos/Todo";
import Covid from "./views/Covid";
import { CountDown, NewCountDown } from "./views/CountDown";
import Blog from "./views/Blog";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";

function App() {
  //
  let [name, setName] = useState("quocvu");
  let [Address, setAddress] = useState("Hau Giang");
  let [todos, setTodos] = useState([
    { id: "todo1", title: "Hoc PHP", type: "book" },
    { id: "todo2", title: "Hoc Reactjs", type: "pen" },
    { id: "todo3", title: "Hoc Javascript", type: "ruler" },
    { id: "todo4", title: "Hoc NodeJs", type: "book" },
  ]);
  //
  // useEffect(() => {
  //   console.log("xin chao");
  // }, [Address]);
  //
  const handleClick = () => {
    setName(Address);
    if (!Address) {
      alert("Vui Long Dien Thong Tin");
      return;
    }

    let ranDom = Math.floor(Math.random() * 50);
    let newTodo = { id: ranDom, title: Address, type: "book" };
    setTodos([...todos, newTodo]);
    setAddress("");
  };
  //
  const handleOnchange = (event) => {
    setAddress(event.target.value);
  };
  const onTimeup = () => {
    alert("Hello word ");
  };
  // xu li  xoa todo
  const deleteTodo = (id) => {
    let deTodo = todos;
    deTodo = deTodo.filter((item) => {
      return id !== item.id;
    });
    setTodos(deTodo);
  };
  //
  return (
    <Router>
      <div className="App">
        <Nav />
        <header className="App-header">{/* <h1>Hello world with React.js {name}</h1> */}</header>

        <Switch>
          <Route exact path="/">
            <Covid />
          </Route>
          <Route path="/todo">
            <Home todo={todos} deleteTodo={deleteTodo} />
            <Home
              todo={todos.filter((item) => {
                return item.type === "book";
              })}
              title="my name"
              deleteTodo={deleteTodo}
            />
            <input type="text" value={Address} onChange={(event) => handleOnchange(event)} />
            <button
              type="submit"
              onClick={() => {
                handleClick();
              }}
            >
              Click Me
            </button>
          </Route>
          <Route path="/timer">
            <CountDown onTimeup={onTimeup} />
            <NewCountDown onTimeup={onTimeup} />
          </Route>
          <Route path="/Blog">
            <Blog />
          </Route>
        </Switch>
      </div>
    </Router>
  );
}
export default App;
