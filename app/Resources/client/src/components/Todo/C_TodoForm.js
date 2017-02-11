/**
 * Created by hautruong on 09/02/2017.
 */
import React, {PropTypes} from 'react';
import {
    Form,
    FormGroup,
    FormControl,
    InputGroup,
    ControlLabel,
    Button,
    Row,
    Col
} from 'react-bootstrap';

class C_TodoForm extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            todoId: this.props.todoId || 0,
            category_id: this.props.todoId || 0,
            title: '',
            description: '',
        };
        this.handleFormControlChange = this.handleFormControlChange.bind(this);
        this.onHandleSave = this.onHandleSave.bind(this);
    }

    handleFormControlChange(event) {
        let formControlValue = {};
        formControlValue['hasSent'] = false;
        if (event.target.type == 'checkbox') {
            formControlValue[event.target.name] = event.target.checked ? true : false;
        } else {
            formControlValue[event.target.name] = event.target.value;
        }
        this.setState(formControlValue);
    }

    onHandleSave() {
        let data = {
            todoId: this.state.todoId,
            category: this.state.category_id,
            title: this.state.title,
            description: this.state.description,
        };
        this.props.onSave(data);
    }

    render() {
        return (
            <div className="">
                <Form className="form-body" disabled="disabled" onSubmit={this.onAdvanceSearchSubmit}>
                    <Row>
                        <Col md={12}>
                            <ControlLabel>Title</ControlLabel>
                            <FormGroup>
                                <FormControl
                                    type="text"
                                    placeholder="title"
                                    name="title"
                                    value={this.state.title}
                                    onChange={this.handleFormControlChange}/>
                            </FormGroup>
                        </Col>
                        <Col md={12}>
                            <ControlLabel>Description</ControlLabel>
                            <FormGroup>
                                        <textarea name="description"
                                                  className="form-control"
                                                  onChange={this.handleFormControlChange}
                                                  value={this.state.description}></textarea>
                            </FormGroup>
                        </Col>
                    </Row>

                    {/* Button */}
                    <Row>
                        <Col md={12}>
                            <FormGroup className="pull-right actions">
                                <button
                                    type="button"
                                    className="btn btn-circle grey-mint"
                                    onClick={this.onHandleSave}>
                                    Save
                                </button>
                            </FormGroup>
                        </Col>
                    </Row>
                </Form>
            </
                div >
        )
            ;
    }
}

C_TodoForm.propTypes = {
    todoId: PropTypes.any,
    onSave: PropTypes.func.isRequired,
};

export default C_TodoForm;