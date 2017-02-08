import React, {PropTypes} from 'react';

class Image extends React.Component {
    constructor() {
        super();
        this.state = {};
        this.fallback = () => {
            if (this.props.fallbackSrc) {
                this.setState({ failed: true });
            }
        };
    }

    render() {
        if (this.state.failed) {
            return <img src={this.props.fallbackSrc} className={this.props.className}/>;
        } else {
            return <img src={this.props.src} onError={this.fallback} className={this.props.className}/>;
        }
    }
}

Image.propTypes = {
    src: PropTypes.string.isRequired,
    className: PropTypes.string,
    fallbackSrc: PropTypes.string
};

export default Image;
