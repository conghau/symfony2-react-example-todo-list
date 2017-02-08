import React, { PropTypes } from 'react';

class UploadStatusMapping extends React.Component {
  constructor (props, context) {
    super(props, context);
  }
  render () {
    return (
      <span className={this.props.status.className}>{this.props.status.name}</span>
        );
  }
}

UploadStatusMapping.propTypes = {
  status: PropTypes.object.isRequired
};

export default UploadStatusMapping;
