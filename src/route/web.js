import homeController from "../controller/homeController.js";
import express from "express";

let router = express.Router();

const initWebRoute = (app) => {
  router.get("/", homeController.getHomepage);
  router.get("/detail/user/:id", homeController.getDetailpage);
  router.post("/create-new-user", homeController.createNewUser);
  router.post("/detail-user", homeController.deleteUser);
  router.get("/edit-user/:id", homeController.getEditpage);
  router.post("/update-user", homeController.getUpdate);
  router.get("/about", (req, res) => {
    res.send("Hello word");
  });
  return app.use("/", router);
};
export default initWebRoute;
