import logo from "./logo.svg";
import "./App.scss";
import Mycomponent from "./demo/Mycomponent.js";
import List from "./todo/ListTodo";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import ListTodo from "./todo/ListTodo";
import Nav from "./Nav/Nav";
import Home from "./demo/Home";
import ListUser from "./User/ListUser";
import DetailUser from "./User/DetailUser";

import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";

function App() {
  return (
    <Router>
      <div className="App">
        <header className="App-header">
          <Nav />
          {/* <img src={logo} className="App-logo" alt="logo" />
          <p>Thực Hành Todo App React.js</p> */}

          <Switch>
            <Route path="/" exact>
              <Home />
            </Route>
            <Route path="/todos">
              <ListTodo />
            </Route>
            <Route path="/about">
              <Mycomponent />
            </Route>

            <Route path="/user" exact>
              <ListUser />
            </Route>

            <Route path="/user/:id">
              <DetailUser />
            </Route>
          </Switch>
        </header>

        <ToastContainer
          position="top-right"
          autoClose={5000}
          hideProgressBar={false}
          newestOnTop={false}
          closeOnClick
          rtl={false}
          pauseOnFocusLoss
          draggable
          pauseOnHover
        />
      </div>
    </Router>
  );
}

export default App;
