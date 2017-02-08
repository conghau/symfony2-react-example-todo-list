import React, { PropTypes } from 'react';
import { Link, IndexLink } from 'react-router';
import LoadingDots from './LoadingDots';

const Header = ({ loading }) => {
  return (
    <nav>
      {/* <IndexLink to="/employee/import/mapping/" activeClassName="active">Home</IndexLink> */}
      {/* {" | "} */}
      {/* <Link to="/employee/import/mapping/upload" activeClassName="active">Upload</Link> */}
      {/* {" | "} */}
      {/* <Link to="/employee/import/mapping/select" activeClassName="active">Select</Link> */}
      {/* {" | "} */}
      {/* <Link to="/employee/import/mapping/courses" activeClassName="active">Courses</Link> */}
      {/* {loading && <LoadingDots interval={100} dots={20}/>} */}
    </nav>
    );
};

Header.propTypes = {
  loading: PropTypes.bool.isRequired
};

export default Header;
