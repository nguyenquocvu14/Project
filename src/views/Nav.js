import "../views/Nav.scss";
import { BrowserRouter as Router, Switch, Route, Link, NavLink } from "react-router-dom";
const Nav = () => {
  return (
    <div className="topnav">
      <NavLink to="/" exact>
        Home
      </NavLink>
      <NavLink to="/todo">Todo</NavLink>
      <NavLink to="/timer">Timer</NavLink>
      <NavLink to="/blog">Blog</NavLink>
      <NavLink to="/search">About</NavLink>
    </div>
  );
};
export default Nav;
