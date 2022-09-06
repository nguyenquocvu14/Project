import express from "express";
import homeController from "../controller/homeController";
import userController from "../controller/userController";
let router = express.Router();

let initWebRoutes = (app) => {
  router.get("/", homeController.getHomePage);
  router.get("/crud", homeController.getCRUD);
  router.post("/post-crud", homeController.postCRUD);
  router.get("/get-crud", homeController.displayGetCRUD);
  router.get("/edit-crud", homeController.getEditCRUD);
  router.post("/put-crud", homeController.putCRUD);
  router.get("/delete-crud", homeController.deleteCRUD);
  router.post("/api/login", userController.handleLogin); //check Login
  //show user
  router.get("/api/get-all-user", userController.handleGetAllUser); //Show create client
  router.post("/api/create-new-user", userController.handleCreateNewUser); //create delete client
  router.delete("/api/delete-user", userController.handleDeleteUser); //delete edit client
  router.put("/api/edit-user", userController.handleEditUser); //edit user client
  //allcode
  router.get("/allcode", userController.getAllCode);

  return app.use("/", router);
};
module.exports = initWebRoutes;
