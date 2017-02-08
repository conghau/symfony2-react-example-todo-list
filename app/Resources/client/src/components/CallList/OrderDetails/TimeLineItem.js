import React, {PropTypes} from 'react';

class TimeLineItem extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    render() {
        if(!this.props.text) return null;
        return (
            <li className={`tt-item ${this.props.wpClass}`}>
                <div className={`tt-timeline-icon ${this.props.classIcon}`}>
                    {this.props.icon &&
                        <i className={this.props.icon}></i>
                    }
                </div>
                <div className="tt-timeline-content left">
                    <div className={`tt-content-container ${this.props.classText}`}>
                        {this.props.text}
                    </div>
                </div>
                <div className="tt-timeline-content right">
                    <div className={`tt-content-container ${this.props.classValue}`}>
                        {this.props.value}
                    </div>
                </div>
            </li>
        );
    }
}

TimeLineItem.propTypes = {
    wpClass: PropTypes.string,
    text: PropTypes.string,
    classText: PropTypes.string,
    icon: PropTypes.string,
    classIcon: PropTypes.string,
    value: PropTypes.string,
    classValue: PropTypes.string
};

export default TimeLineItem;