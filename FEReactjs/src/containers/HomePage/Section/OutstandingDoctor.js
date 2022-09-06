import React, { Component } from "react";
import { Redirect } from "react-router-dom";
import { connect } from "react-redux";
import Slider from "react-slick";
class OutstandingDoctor extends Component {
  render() {
    return (
      <div className="section-share section-outstanding-doctor">
        <div className="section-container">
          <div className="section-header">
            <span className="title-section">Bác sĩ nổi bật tuần qua</span>
            <button className="btn-section">Tìm Kiếm</button>
          </div>
          <div className="section-body">
            <Slider {...this.props.settings}>
              <div className="section-customize">
                <div className="customize-border">
                  <div className="outer-bg">
                    <div className="bg-img section-outstanding-doctor"></div>
                  </div>
                  <div className="position text-center">
                    <div>Giáo Sư Tiến Sĩ IT Quốc Vũ</div>
                    <div>Công Nghệ Thông Tin</div>
                  </div>
                </div>
              </div>
              <div className="section-customize">
                <div className="customize-border">
                  <div className="outer-bg">
                    <div className="bg-img section-outstanding-doctor"></div>
                  </div>
                  <div className="position text-center">
                    <div>Giáo Sư Tiến Sĩ IT Quốc Vũ</div>
                    <div>Công Nghệ Thông Tin</div>
                  </div>
                </div>
              </div>
              <div className="section-customize">
                <div className="customize-border">
                  <div className="outer-bg">
                    <div className="bg-img section-outstanding-doctor"></div>
                  </div>
                  <div className="position text-center">
                    <div>Giáo Sư Tiến Sĩ IT Quốc Vũ</div>
                    <div>Công Nghệ Thông Tin</div>
                  </div>
                </div>
              </div>
              <div className="section-customize">
                <div className="customize-border">
                  <div className="outer-bg">
                    <div className="bg-img section-outstanding-doctor"></div>
                  </div>
                  <div className="position text-center">
                    <div>Giáo Sư Tiến Sĩ IT Quốc Vũ</div>
                    <div>Công Nghệ Thông Tin</div>
                  </div>
                </div>
              </div>
              <div className="section-customize">
                <div className="customize-border">
                  <div className="outer-bg">
                    <div className="bg-img section-outstanding-doctor"></div>
                  </div>
                  <div className="position text-center">
                    <div>Giáo Sư Tiến Sĩ IT Quốc Vũ</div>
                    <div>Công Nghệ Thông Tin</div>
                  </div>
                </div>
              </div>
              <div className="section-customize">
                <div className="customize-border">
                  <div className="outer-bg">
                    <div className="bg-img section-outstanding-doctor"></div>
                  </div>
                  <div className="position text-center">
                    <div>Giáo Sư Tiến Sĩ IT Quốc Vũ</div>
                    <div>Công Nghệ Thông Tin</div>
                  </div>
                </div>
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

export default connect(mapStateToProps, mapDispatchToProps)(OutstandingDoctor);
