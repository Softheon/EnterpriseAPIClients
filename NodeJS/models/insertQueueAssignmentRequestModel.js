/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

/**
 * Model for POST/PUT Queue Assignment input parameters.
 *
 */
class InsertQueueAssignmentRequestModel {
  /**
   * Create a InsertQueueAssignmentRequestModel.
   * @member {number} [queueID] Gets or sets the unique queue identifier.
   * @member {number} [userID] Gets or sets the user identifier.
   * @member {string} [type] Gets or sets the queue assignment type. Possible
   * values include: 'Unspecified', 'Primary', 'Secondary'
   * @member {number} [order] Gets or sets the sort order.
   * @member {string} [taskSortColumn] Gets or sets the task sort column.
   * Possible values include: 'TaskID', 'QueueID', 'DrawerID', 'AddressID',
   * 'ObjectID', 'ObjectType', 'State', 'Priority', 'Description', 'Message1',
   * 'Message2', 'Message3', 'Message4', 'Message5', 'OwnerUserID',
   * 'OwnerGroupID', 'EffectiveUserID', 'EffectiveGroupID', 'PreviousQueueID',
   * 'NextQueueID', 'InsertionTime', 'ResolutionTime', 'TaskFileAttachment',
   * 'ReservedInt1', 'ReservedString1'
   * @member {string} [fetchType] Gets or sets the type of the fetch. Possible
   * values include: 'Unspecified', 'Manual', 'Push'
   */
  constructor() {
  }

  /**
   * Defines the metadata of InsertQueueAssignmentRequestModel
   *
   * @returns {object} metadata of InsertQueueAssignmentRequestModel
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'InsertQueueAssignmentRequestModel',
      type: {
        name: 'Composite',
        className: 'InsertQueueAssignmentRequestModel',
        modelProperties: {
          queueID: {
            required: false,
            serializedName: 'QueueID',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 1
            },
            type: {
              name: 'Number'
            }
          },
          userID: {
            required: false,
            serializedName: 'UserID',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 1
            },
            type: {
              name: 'Number'
            }
          },
          type: {
            required: false,
            serializedName: 'Type',
            type: {
              name: 'String'
            }
          },
          order: {
            required: false,
            serializedName: 'Order',
            type: {
              name: 'Number'
            }
          },
          taskSortColumn: {
            required: false,
            serializedName: 'TaskSortColumn',
            type: {
              name: 'String'
            }
          },
          fetchType: {
            required: false,
            serializedName: 'FetchType',
            type: {
              name: 'String'
            }
          }
        }
      }
    };
  }
}

module.exports = InsertQueueAssignmentRequestModel;
