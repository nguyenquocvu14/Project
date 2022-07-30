import { useHistory } from "react-router-dom";

const NotFound = () => {
  let history = useHistory();
  const handleGoHome = () => {
    history.push("/");
  };
  return (
    <>
      <div>
        <h1>404</h1>
        Không thể truy cập trang web này
      </div>
      <button onClick={handleGoHome}>Go To Home</button>
    </>
  );
};
export default NotFound;
