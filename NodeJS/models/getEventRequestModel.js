/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

/**
 * Model for the GET Event input parameters
 *
 */
class GetEventRequestModel {
  /**
   * Create a GetEventRequestModel.
   * @member {number} drawerID Gets or sets the drawer identifier.
   * @member {number} entityID Gets or sets the entity identifier.
   * @member {string} [type] Gets or sets the type. Possible values include:
   * 'Undefined', 'Fatal', 'Warning', 'Info', 'Debug', 'Process', 'RPC', 'SQL',
   * 'DDE'
   * @member {date} [minEventTime] Gets or sets the minimum event time.
   * @member {date} [maxEventTime] Gets or sets the maximum event time.
   * @member {number} [eventUserID] Gets or sets the event user identifier.
   * @member {number} [eventGroupID] Gets or sets the event group identifier.
   * @member {string} [category] Gets or sets the category. Possible values
   * include: 'Undefined', 'Entity', 'Profile', 'Attachment', 'Discussion',
   * 'Field', 'Workflow'
   * @member {string} [classProperty] Gets or sets the class. Possible values
   * include: 'Undefined', 'Application', 'Security', 'System'
   * @member {string} [operation] Gets or sets the operation. Possible values
   * include: 'Undefined', 'Insert', 'Update', 'Delete', 'Copy', 'Lock',
   * 'Unlock', 'Open', 'Close', 'Checkout', 'Checkin', 'View', 'Merge',
   * 'Split', 'Classify', 'Null', 'OpenWF', 'Remove', 'ReturnToTop',
   * 'ReturnToBottom', 'Accept', 'Suspend', 'Reject', 'Route', 'Forward',
   * 'Reply', 'Reassign', 'Reset', 'Override', 'Rollback', 'Archive'
   * @member {number} [minProcessingTime] Gets or sets the minimum processing
   * time.
   * @member {number} [maxProcessingTime] Gets or sets the maximum processing
   * time.
   * @member {number} [page] Gets or sets the page number.
   * @member {number} [pageSize] Gets or sets the size of the page.
   * @member {string} [sortOrder] Gets or sets the order. Possible values
   * include: 'Unspecified', 'Ascending', 'Descending'
   * @member {string} [sortBy] Gets or sets the column to order by. Possible
   * values include: 'ID', 'Type', 'EventTime'
   */
  constructor() {
  }

  /**
   * Defines the metadata of GetEventRequestModel
   *
   * @returns {object} metadata of GetEventRequestModel
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'GetEventRequestModel',
      type: {
        name: 'Composite',
        className: 'GetEventRequestModel',
        modelProperties: {
          drawerID: {
            required: true,
            serializedName: 'DrawerID',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 1
            },
            type: {
              name: 'Number'
            }
          },
          entityID: {
            required: true,
            serializedName: 'EntityID',
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
          minEventTime: {
            required: false,
            serializedName: 'MinEventTime',
            type: {
              name: 'DateTime'
            }
          },
          maxEventTime: {
            required: false,
            serializedName: 'MaxEventTime',
            type: {
              name: 'DateTime'
            }
          },
          eventUserID: {
            required: false,
            serializedName: 'EventUserID',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 1
            },
            type: {
              name: 'Number'
            }
          },
          eventGroupID: {
            required: false,
            serializedName: 'EventGroupID',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 1
            },
            type: {
              name: 'Number'
            }
          },
          category: {
            required: false,
            serializedName: 'Category',
            type: {
              name: 'String'
            }
          },
          classProperty: {
            required: false,
            serializedName: 'Class',
            type: {
              name: 'String'
            }
          },
          operation: {
            required: false,
            serializedName: 'Operation',
            type: {
              name: 'String'
            }
          },
          minProcessingTime: {
            required: false,
            serializedName: 'MinProcessingTime',
            type: {
              name: 'Number'
            }
          },
          maxProcessingTime: {
            required: false,
            serializedName: 'MaxProcessingTime',
            type: {
              name: 'Number'
            }
          },
          page: {
            required: false,
            serializedName: 'Page',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 1
            },
            type: {
              name: 'Number'
            }
          },
          pageSize: {
            required: false,
            serializedName: 'PageSize',
            constraints: {
              InclusiveMaximum: 1000,
              InclusiveMinimum: 1
            },
            type: {
              name: 'Number'
            }
          },
          sortOrder: {
            required: false,
            serializedName: 'SortOrder',
            type: {
              name: 'String'
            }
          },
          sortBy: {
            required: false,
            serializedName: 'SortBy',
            type: {
              name: 'String'
            }
          }
        }
      }
    };
  }
}

module.exports = GetEventRequestModel;
