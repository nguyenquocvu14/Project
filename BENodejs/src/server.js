import express from "express";
import configViewEngine from "./config/viewsEngine";
import initWebRoute from "./route/web.js";
import "dotenv/config";
import connectDB from "./config/connectDB.js";
// let cors = require("cors");

const app = express();
//xu li van de login video 36
// Add headers before the routes are defined
app.use(function (req, res, next) {
  // Website you wish to allow to connect
  res.setHeader("Access-Control-Allow-Origin", "http://localhost:3000");

  // Request methods you wish to allow
  res.setHeader("Access-Control-Allow-Methods", "GET, POST, OPTIONS, PUT, PATCH, DELETE");

  // Request headers you wish to allow
  res.setHeader("Access-Control-Allow-Headers", "X-Requested-With,content-type");

  // Set to true if you need the website to include cookies in the requests sent
  // to the API (e.g. in case you use sessions)
  res.setHeader("Access-Control-Allow-Credentials", true);

  // Pass to next layer of middleware
  next();
});
const port = process.env.PORT || 9000;
// app.use(cors());
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

configViewEngine(app);
initWebRoute(app);
connectDB();

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
