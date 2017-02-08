/**
 * Created by hautruong on 24/01/2017.
 */
import React, {PropTypes} from 'react';
import {Row, Col, Alert} from "react-bootstrap";
import {connect} from "react-redux";
import {bindActionCreators} from "redux";
import * as JobAction from "../../actions/FE/JobActions";
import * as globalConstant from '../../components/common/constant';
import "./scss/JobPage.scss";
import PostSingle from '../../components/Job/PostSingle';


class JobPage extends React.Component {
    constructor(props, context) {
        super(props, context);

        this.state = {
            alertVisible: true,
            pageNum: 1,
            pageSize: parseInt(globalConstant.PAGE_SIZE),
            dataSearch: {},
        };
    }

    componentWillMount() {
        this.props.actions.loadFEJobListAction();
    }

    render() {
        return (
            <Row>
                <Col md={9}>
                    <div className="portlet light">
                        <div className="portlet-title">
                            <div className="caption">
                                <i className="icon-bar-chart font-dark hide"></i>
                                <span className="caption-subject font-dark bold uppercase">Site Visits</span>
                                <span className="caption-helper">weekly stats...</span>
                            </div>
                            <div className="actions">
                                <div className="btn-group btn-group-devided" data-toggle="buttons">
                                    <label className="btn red btn-outline btn-circle btn-sm active">
                                        <input type="radio" name="options" className="toggle" id="option1"/>New</label>
                                    <label className="btn red btn-outline btn-circle btn-sm">
                                        <input type="radio" name="options" className="toggle"
                                               id="option2"/>Returning</label>
                                </div>
                            </div>
                        </div>
                        <div className="portlet-body">

                        </div>
                    </div>
                </Col>
                <Col md={9}>
                    <PostSingle />
                </Col>
            </Row>
        );
    }
}

JobAction.propTypes = {
    actions: PropTypes.object.isRequired,
    jobs: PropTypes.array,
};

function mapStateToProps(state, ownProps) {
    return {};
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(JobAction, dispatch)
    };
}

export default connect(mapStateToProps, mapDispatchToProps)(JobPage);