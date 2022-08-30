import db from "../models/index.js";
import CRUDService from "../services/CRUDServices.js";

let getHomePage = async (req, res) => {
  try {
    let data = await db.User.findAll();
    // console.log(data);
    return res.render("homepage.ejs", { data: JSON.stringify(data) });
  } catch (e) {
    // console.log(e);
  }
};

let getCRUD = async (req, res) => {
  return res.render("crud.ejs");
};
//them dl
let postCRUD = async (req, res) => {
  let message = await CRUDService.createNewUser(req.body);
  // console.log(message);
  res.redirect("/get-crud");
  // return res.send("hello word crud");
};
//show data
let displayGetCRUD = async (req, res) => {
  let data = await CRUDService.getAllUser();
  // console.log(data);
  return res.render("displayCRUD.ejs", { dataTable: data });
};
//edit data
let getEditCRUD = async (req, res) => {
  let userId = req.query.id;
  if (userId) {
    let userData = await CRUDService.getUserInfoById(userId);
    console.log(userData);
    return res.render("editCRUD.ejs", {
      user: userData,
    });
  } else {
    return res.send("users id not found");
  }
};
let putCRUD = async (req, res) => {
  let data = req.body;
  let allUsers = await CRUDService.updateUserData(data);
  return res.render("displayCRUD.ejs", {
    dataTable: allUsers,
  });
};

//delete
let deleteCRUD = async (req, res) => {
  let id = req.query.id;
  if (id) {
    await CRUDService.deleteUserById(id);
    return res.send("delete user");
  } else {
    return res.send("user id not found");
  }
};
module.exports = {
  getHomePage: getHomePage,
  getCRUD: getCRUD,
  postCRUD: postCRUD,
  displayGetCRUD: displayGetCRUD,
  getEditCRUD: getEditCRUD,
  putCRUD: putCRUD,
  deleteCRUD: deleteCRUD,
};
