/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

/**
 * The model that is sent in response to a GET request for Event
 *
 */
class EventModel {
  /**
   * Create a EventModel.
   * @member {number} [id] Gets or sets the identifier.
   * @member {number} [drawerID] Gets or sets the drawer identifier.
   * @member {number} [entityID] Gets or sets the entity identifier.
   * @member {string} [type] Gets or sets the type. Possible values include:
   * 'Undefined', 'Fatal', 'Warning', 'Info', 'Debug', 'Process', 'RPC', 'SQL',
   * 'DDE'
   * @member {date} [eventTime] Gets or sets the event time.
   * @member {number} [eventUserID] Gets or sets the event user identifier.
   * @member {string} [eventUserFullName] Gets or sets the full name of the
   * event user.
   * @member {number} [eventGroupID] Gets or sets the event group identifier.
   * @member {string} [eventGroupName] Gets or sets the name of the event
   * group.
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
   * @member {string} [source] Gets or sets the source.
   * @member {string} [computer] Gets or sets the computer.
   * @member {string} [iPAddress] Gets or sets the ip address.
   * @member {string} [description] Gets or sets the description.
   * @member {number} [processTime] Gets or sets the process time.
   * @member {object} [details] Gets or sets the details.
   */
  constructor() {
  }

  /**
   * Defines the metadata of EventModel
   *
   * @returns {object} metadata of EventModel
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'EventModel',
      type: {
        name: 'Composite',
        className: 'EventModel',
        modelProperties: {
          id: {
            required: false,
            serializedName: 'ID',
            type: {
              name: 'Number'
            }
          },
          drawerID: {
            required: false,
            serializedName: 'DrawerID',
            type: {
              name: 'Number'
            }
          },
          entityID: {
            required: false,
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
          eventTime: {
            required: false,
            serializedName: 'EventTime',
            type: {
              name: 'DateTime'
            }
          },
          eventUserID: {
            required: false,
            serializedName: 'EventUserID',
            type: {
              name: 'Number'
            }
          },
          eventUserFullName: {
            required: false,
            serializedName: 'EventUserFullName',
            type: {
              name: 'String'
            }
          },
          eventGroupID: {
            required: false,
            serializedName: 'EventGroupID',
            type: {
              name: 'Number'
            }
          },
          eventGroupName: {
            required: false,
            serializedName: 'EventGroupName',
            type: {
              name: 'String'
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
          },
          description: {
            required: false,
            serializedName: 'Description',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          processTime: {
            required: false,
            serializedName: 'ProcessTime',
            type: {
              name: 'Number'
            }
          },
          details: {
            required: false,
            serializedName: 'Details',
            type: {
              name: 'Object'
            }
          }
        }
      }
    };
  }
}

module.exports = EventModel;
