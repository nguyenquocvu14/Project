import React from "react";
import Chilcomponet from "./Childcomponent";
import Addcomponent from "./Addcomponent";
class Mycomponent extends React.Component {
  state = {
    arrjob: [
      {
        id: "1",
        title: "Developers",
        salary: "500",
      },
      {
        id: "2",
        title: "Tester",
        salary: "1000",
      },
      {
        id: "3",
        title: "Manager",
        salary: "900",
      },
    ],
  };

  addNewjob = (job) => {
    console.log(job);
    this.setState({
      arrjob: [...this.state.arrjob, job],
    });
  };

  // remove = (job) => {
  //   let currenJobs = this.state.arrjob;
  //   currenJobs = currenJobs.filter((item) => item.id !== job.id);
  //   // console.log("hrloo", job);
  //   this.setState({
  //     arrjob: currenJobs,
  //   });
  // };
  remove = (job) => {
    let currenJobs = this.state.arrjob;
    let curren = currenJobs.filter((item) => {
      return item.id !== job.id;
    });
    this.setState({
      arrjob: curren,
    });
  };

  render() {
    return (
      <>
        <Addcomponent addNewjob={this.addNewjob} />

        <Chilcomponet
          arrjob={this.state.arrjob}
          remove={this.remove}
        />
      </>
    );
  }
}
export default Mycomponent;
