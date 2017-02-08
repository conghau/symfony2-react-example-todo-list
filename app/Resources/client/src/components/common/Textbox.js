import React, { PropTypes } from 'react';

const Textbox = ({ name, onChange, placeholder, value, error, tabindex, maxLength, readOnly }) => {
  let wrapperClass = 'form-group';
  if (error && error.length > 0) {
    wrapperClass += ' ' + 'has-error';
  }
  let tabIndexNumber = 0;
  if (tabindex) {
    tabIndexNumber = tabindex;
  }

  return (
    <div>
      <input
        type='text'
        name={name}
        className='form-control'
        placeholder={placeholder}
        value={value}
        tabIndex={tabIndexNumber}
        maxLength={maxLength}
        onChange={onChange}
        readOnly={readOnly}
            />
      {error && <div className='alert alert-danger'>{error}</div>}
    </div>
    );
};

Textbox.propTypes = {
  name: PropTypes.string.isRequired,
  onChange: PropTypes.func.isRequired,
  placeholder: PropTypes.string,
  value: PropTypes.string,
  error: PropTypes.string,
  tabindex: PropTypes.number,
  maxLength: PropTypes.number,
  readOnly: PropTypes.bool
};

export default Textbox;
