import homeController from "../controller/homeController.js";
import express from "express";
import multer from "multer";
import path from "path";
let appRoot = require("app-root-path");
let router = express.Router();

const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, appRoot + "/src/public/image/");
  },

  // By default, multer removes file extensions so let's add them back
  filename: function (req, file, cb) {
    cb(null, file.fieldname + "-" + Date.now() + path.extname(file.originalname));
  },
});

const imageFilter = function (req, file, cb) {
  // Accept images only
  if (!file.originalname.match(/\.(jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF)$/)) {
    req.fileValidationError = "Only image files are allowed!";
    return cb(new Error("Only image files are allowed!"), false);
  }
  cb(null, true);
};
let upload = multer({ storage: storage, fileFilter: imageFilter });
const initWebRoute = (app) => {
  router.get("/", homeController.getHomepage);
  router.get("/detail/user/:id", homeController.getDetailpage);
  router.post("/create-new-user", homeController.createNewUser);
  router.post("/detail-user", homeController.deleteUser);
  router.get("/edit-user/:id", homeController.getEditpage);
  router.post("/update-user", homeController.getUpdate);
  router.get("/uploadfile", homeController.getUploadFilepage);
  router.post("/upload-profile-pic", upload.single("profile_pic"), homeController.handleUploadFile);
  router.get("/about", (req, res) => {
    res.send("Hello word");
  });
  return app.use("/", router);
};
export default initWebRoute;
