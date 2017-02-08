import React, { PropTypes } from 'react';
import { Link } from 'react-router';

class UploadGoToNextStep extends React.Component {
  constructor (props, context) {
    super(props, context);
  }
  render () {
    return (
      <Link
        to={this.props.status.nextStepUrl + this.props.transactionId}
        className='btn btn-outline btn-circle btn-sm green-haze'
            >
        {this.props.status.nextStepText}
      </Link>
        );
  }
}

export default UploadGoToNextStep;
