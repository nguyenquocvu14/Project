import React from "react";

class Chilcomponet extends React.Component {
  state = {
    showjob: false,
  };
  handleShowhide = () => {
    this.setState({
      showjob: !this.state.showjob,
    });
  };

  handleDelete = (job) => {
    console.log("click me", job);
    this.props.remove(job);
  };

  render() {
    const arrjob = this.props.arrjob;
    const { showjob } = this.state;
    // console.log(arrjob);

    const check = showjob === true ? "showjob = true" : "showjob = false";
    console.log(check);

    return (
      <React.Fragment>
        {showjob === false ? (
          <div>
            <button className="btn" onClick={() => this.handleShowhide()}>
              Show
            </button>
          </div>
        ) : (
          <>
            <div className="list">
              {arrjob.map((item, index) => {
                return (
                  <div key={item.id}>
                    {item.title} - {item.salary}
                    <span onClick={() => this.handleDelete(item)}>&nbsp;Xoa</span>
                  </div>
                );
              })}
            </div>
            <div>
              <button onClick={() => this.handleShowhide()}>Hide</button>
            </div>
          </>
        )}
      </React.Fragment>
    );
  }
}
export default Chilcomponet;
