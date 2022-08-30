//Goi API username ,pass
import axios from "../axios";

const handleLoginApi = async (userEmail, userPassword) => {
 return await axios.post("/api/login", { email: userEmail, password: userPassword });
};

//Goi API lay all thong tin user
const getAllUser = async (inputId) => {
 return await axios.get(`/api/get-all-user?id=${inputId}`);
};
//goi api new user
const createNewUserService = async (data) => {
 return await axios.post("/api/create-new-user", data);
};
//goi api delete user

const deleteUserServices = (userId) => {
 return axios.delete("api/delete-user", {
  data: {
   id: userId,
  },
 });
};
//goi api edit user
const editUserServices = async (userData) => {
 console.log("check datad", userData);
 return await axios.put("/api/edit-user", userData);
};
export { handleLoginApi, getAllUser, createNewUserService, deleteUserServices, editUserServices };
