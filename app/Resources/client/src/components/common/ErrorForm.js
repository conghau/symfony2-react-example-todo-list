import React, { PropTypes } from 'react';

const ErrorForm = ({ field, message }) => {
  return (
    <span className='help-block'> {message}</span>
    );
};

ErrorForm.propTypes = {
  field: PropTypes.string.isRequired,
  message: PropTypes.string.isRequired
};

export default ErrorForm;
