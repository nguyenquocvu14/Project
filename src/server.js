import express from "express";
import configViewEngine from "./configs/viewEngine.js";
import initWebRoute from "./route/web.js";
import "dotenv/config";
// import Connection from "./configs/connectDB";

const app = express();
const port = process.env.PORT || 3000;
configViewEngine(app);
initWebRoute(app);

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
