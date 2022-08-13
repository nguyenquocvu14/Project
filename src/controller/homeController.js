import { parse } from "dotenv";
import pool from "../configs/connectDB";

let getHomepage = async (req, res) => {
  //logic
  const [rows, fields] = await pool.execute("SELECT * FROM users");
  // console.log(rows[0]);
  return res.render("index.ejs", { dataUser: rows });
};

let getDetailpage = async (req, res) => {
  let userId = req.params.id;
  let [user] = await pool.execute("SELECT * FROM users Where id=?", [userId]);
  // console.log("check", user);
  return res.send(JSON.stringify(user));
};
let createNewUser = async (req, res) => {
  // console.log("check", req.body);
  let { firstname, lastname, email, address } = req.body;
  await pool.execute("insert into users (firstname, lastname, email, address) values(?, ?, ?, ?)", [firstname, lastname, email, address]);
  // return res.send("insert into users ");
  return res.redirect("/");
};

let deleteUser = async (req, res) => {
  let userId = req.body.userId;
  await pool.execute("delete from users where id =?", [userId]);

  return res.redirect("/");
};

let getEditpage = async (req, res) => {
  let id = req.params.id;
  let [user] = await pool.execute("SELECT * FROM users Where id=?", [id]);
  return res.render("Update.ejs", { dataUser: user });
};

let getUpdate = async (req, res) => {
  let { firstname, id, lastname, email, address } = req.body;
  await pool.execute("update users set firstname = ? , lastname = ? ,email = ? , address = ? where id = ? ", [firstname, lastname, email, address, id]);

  return res.redirect("/");
};
module.exports = {
  getHomepage,
  getDetailpage,
  createNewUser,
  deleteUser,
  getEditpage,
  getUpdate,
};
