/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

/**
 * Defines properties and methods for Workflow Action Model
 *
 */
class WorkflowActionModel {
  /**
   * Create a WorkflowActionModel.
   * @member {number} [taskID] Gets or sets the task identifier.
   * @member {number} [targetID] Gets or sets the target id.
   * @member {string} [queueName] Gets or sets the name of the queue.
   * @member {string} [source] Gets or sets the source.
   * @member {string} [computer] Gets or sets the name of the computer.
   * @member {string} [iPAddress] Gets or sets the IP address.
   */
  constructor() {
  }

  /**
   * Defines the metadata of WorkflowActionModel
   *
   * @returns {object} metadata of WorkflowActionModel
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'WorkflowActionModel',
      type: {
        name: 'Composite',
        className: 'WorkflowActionModel',
        modelProperties: {
          taskID: {
            required: false,
            serializedName: 'TaskID',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 0
            },
            type: {
              name: 'Number'
            }
          },
          targetID: {
            required: false,
            serializedName: 'TargetID',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 0
            },
            type: {
              name: 'Number'
            }
          },
          queueName: {
            required: false,
            serializedName: 'QueueName',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          source: {
            required: false,
            serializedName: 'Source',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          computer: {
            required: false,
            serializedName: 'Computer',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          iPAddress: {
            required: false,
            serializedName: 'IPAddress',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          }
        }
      }
    };
  }
}

module.exports = WorkflowActionModel;
