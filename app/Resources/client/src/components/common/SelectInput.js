import React, { PropTypes } from 'react';
import FormattedMessage from '../common/FormattedMessage';

const SelectInput = ({ name, label, onChange, defaultOption, value, error, options, disableOptions }) => {
  return (
    <div className='form-group'>
      <div>
        <select
          name={name}
          value={value}
          onChange={onChange}
          className='form-control'>
          <option value=''>{defaultOption}</option>
          {options.map((option) => {
            const optionText = `${option.text}`;
            if (disableOptions.find(item => item == option.value) !== undefined) {
              return <option key={option.value} disabled='disabled' value={option.value}>
                {option.text}
              </option>;
            } else {
              return <option key={option.value}
                value={option.value}>
                {option.text}
              </option>;
            }
          })
                    }
        </select>
        {error && <div className='alert alert-danger'>{error}</div>}
      </div>
    </div>
    );
};

SelectInput.propTypes = {
  name: PropTypes.string.isRequired,
  onChange: PropTypes.func.isRequired,
  defaultOption: PropTypes.string,
  value: PropTypes.string,
  error: PropTypes.string,
  label: PropTypes.string,
  options: PropTypes.arrayOf(PropTypes.object),
  disableOptions: PropTypes.array
};

export default SelectInput;
