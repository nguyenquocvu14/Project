import React, { Component } from "react";
import { Redirect } from "react-router-dom";
import { connect } from "react-redux";
import "../../HomePage/HomePage.scss";
import { FormattedMessage } from "react-intl";
import Slider from "react-slick";

class Handbook extends Component {
  render() {
    return (
      <div className="section-share section-handbook">
        <div className="section-container">
          <div className="section-header">
            <span className="title-section">Cẩm nang</span>
            <button className="btn-section">Xem thêm</button>
          </div>
          <div className="section-body">
            <Slider {...this.props.settings}>
              <div className="section-customize">
                <div className="bg-img section-handbook "></div>
                <h3>Bác sĩ da liễu từ xa</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-handbook "></div>
                <h3>Bác sĩ da liễu từ xa</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-handbook "></div>
                <h3>Bác sĩ da liễu từ xa</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-handbook "></div>
                <h3>Bác sĩ da liễu từ xa</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-handbook "></div>
                <h3>Bác sĩ da liễu từ xa</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-handbook "></div>
                <h3>Bác sĩ da liễu từ xa</h3>
              </div>
            </Slider>
          </div>
        </div>
      </div>
    );
  }
}
const mapStateToProps = (state) => {
  return {
    isLoggedIn: state.user.isLoggedIn,
  };
};

const mapDispatchToProps = (dispatch) => {
  return {};
};

export default connect(mapStateToProps, mapDispatchToProps)(Handbook);
