import userServices from "../services/userServices";
//check email password
let handleLogin = async (req, res) => {
  let email = req.body.email;
  let password = req.body.password;
  if (!email || !password) {
    return res.status(500).json({
      errCode: 2,
      message: "Missing Input Parameter",
    });
  }
  let userData = await userServices.handleUserLogin(email, password);
  // console.log(userData);
  return res.status(200).json({
    errCode: userData.errCode,
    message: userData.errmessage,
    userData: userData.user ? userData.user : {},
  });
};
//show data client
let handleGetAllUser = async (req, res) => {
  let id = req.query.id;
  let users = await userServices.getAllUsers(id);
  // console.log(users);
  if (!id) {
    return res.status(200).json({
      errCode: 1,
      errMessage: "Missing required parameters",
      users: [],
    });
  }
  return res.status(200).json({
    errCode: 0,
    errMessage: "OK",
    users,
  });
};
//create new user client
let handleCreateNewUser = async (req, res) => {
  let message = await userServices.createNewUser(req.body);
  // console.log("chek>>>>>>", message);
  return res.status(200).json(message);
};

let handleDeleteUser = async (req, res) => {
  let id = req.body.id;
  console.log("checkid", id);
  if (!id) {
    return res.status(200).json({
      errCode: 1,
      errMessage: "Missing required parameters",
    });
  } else {
    let message = await userServices.deleteUser(id);
    console.log("chek>>>>>>", message);
    return res.status(200).json(message);
  }
};
let handleEditUser = async (req, res) => {
  let data = req.body;
  let message = await userServices.updateUserData(data);
  return res.status(200).json(message);
};
//show allcode
let getAllCode = async (req, res) => {
  try {
    let data = await userServices.getAllCodeService(req.query.type);
    console.log("checkkdata", data);
    return res.status(200).json({
      data,
    });
  } catch (e) {
    console.log("error", e);
    return res.status(200).json({
      errCode: -1,
      errMessage: "Error form server",
    });
  }
};
module.exports = {
  handleLogin: handleLogin,
  handleGetAllUser: handleGetAllUser,
  handleCreateNewUser: handleCreateNewUser,
  handleEditUser: handleEditUser,
  handleDeleteUser: handleDeleteUser,
  getAllCode: getAllCode,
};
