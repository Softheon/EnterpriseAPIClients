/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

/**
 * The summary model that is sent in response to a GET request for Entity
 *
 */
class GetEntityBaseResponse {
  /**
   * Create a GetEntityBaseResponse.
   * @member {number} [id] Gets or sets the entity identifier.
   * @member {number} [drawerID] Gets or sets the drawer identifier.
   * @member {number} [acl] Gets or sets the access control list.
   * @member {number} [type] Gets or sets the type.
   * @member {number} [subtype] Gets or sets the subtype.
   * @member {number} [age] Gets or sets the age.
   * @member {number} [referenceCount] Gets or sets the reference identifier.
   * @member {number} [accessCount] Gets or sets the access count.
   * @member {number} [profileCount] Gets or sets the profile count.
   * @member {number} [attachCount] Gets or sets the attach count.
   * @member {number} [noteCount] Gets or sets the note count.
   * @member {number} [ownerUserID] Gets or sets the owner user identifier.
   * @member {string} [ownerUserFullName] Gets or sets the full name of the
   * owner user.
   * @member {number} [ownerGroupID] Gets or sets the owner group identifier.
   * @member {string} [ownerGroupName] Gets or sets the name of the owner
   * group.
   * @member {number} [creatorUserID] Gets or sets the creator user identifier.
   * @member {string} [creatorUserFullName] Gets or sets the full name of the
   * creator user.
   * @member {number} [creatorGroupID] Gets or sets the creator group
   * identifier.
   * @member {string} [creatorGroupName] Gets or sets the name of the creator
   * group.
   * @member {number} [modifierUserID] Gets or sets the modifier user
   * identifier.
   * @member {string} [modifierUserFullName] Gets or sets the full name of the
   * modifier user.
   * @member {number} [modifierGroupID] Gets or sets the modifier group
   * identifier.
   * @member {string} [modifierGroupName] Gets or sets the name of the modifier
   * group.
   * @member {date} [creationTime] Gets or sets the creation time.
   * @member {date} [modificationTime] Gets or sets the modification time.
   * @member {date} [accessTime] Gets or sets the access time.
   * @member {date} [resolutionTime] Gets or sets the resolution time.
   * @member {number} [category] Gets or sets the category.
   * @member {number} [reservedInt1] Gets or sets the reserved int1.
   * @member {number} [reservedInt2] Gets or sets the reserved int2.
   * @member {string} [reservedString1] Gets or sets the reserved string1.
   * @member {string} [state] Gets or sets the state. Possible values include:
   * 'Undefined', 'Available', 'Locked', 'Suspended', 'Archived', 'Deleted',
   * 'Canceled', 'Complete', 'Reviewed', 'ReviewedSuspended',
   * 'ReviewedComplete', 'Rejected', 'RoutingSlipOpen',
   * 'ReviewedRoutingSlipOpen'
   * @member {string} [name] Gets or sets the name.
   */
  constructor() {
  }

  /**
   * Defines the metadata of GetEntityBaseResponse
   *
   * @returns {object} metadata of GetEntityBaseResponse
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'GetEntityBaseResponse',
      type: {
        name: 'Composite',
        className: 'GetEntityBaseResponse',
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
          acl: {
            required: false,
            serializedName: 'Acl',
            type: {
              name: 'Number'
            }
          },
          type: {
            required: false,
            serializedName: 'Type',
            type: {
              name: 'Number'
            }
          },
          subtype: {
            required: false,
            serializedName: 'Subtype',
            type: {
              name: 'Number'
            }
          },
          age: {
            required: false,
            serializedName: 'Age',
            type: {
              name: 'Number'
            }
          },
          referenceCount: {
            required: false,
            serializedName: 'ReferenceCount',
            type: {
              name: 'Number'
            }
          },
          accessCount: {
            required: false,
            serializedName: 'AccessCount',
            type: {
              name: 'Number'
            }
          },
          profileCount: {
            required: false,
            serializedName: 'ProfileCount',
            type: {
              name: 'Number'
            }
          },
          attachCount: {
            required: false,
            serializedName: 'AttachCount',
            type: {
              name: 'Number'
            }
          },
          noteCount: {
            required: false,
            serializedName: 'NoteCount',
            type: {
              name: 'Number'
            }
          },
          ownerUserID: {
            required: false,
            serializedName: 'OwnerUserID',
            type: {
              name: 'Number'
            }
          },
          ownerUserFullName: {
            required: false,
            serializedName: 'OwnerUserFullName',
            type: {
              name: 'String'
            }
          },
          ownerGroupID: {
            required: false,
            serializedName: 'OwnerGroupID',
            type: {
              name: 'Number'
            }
          },
          ownerGroupName: {
            required: false,
            serializedName: 'OwnerGroupName',
            type: {
              name: 'String'
            }
          },
          creatorUserID: {
            required: false,
            serializedName: 'CreatorUserID',
            type: {
              name: 'Number'
            }
          },
          creatorUserFullName: {
            required: false,
            serializedName: 'CreatorUserFullName',
            type: {
              name: 'String'
            }
          },
          creatorGroupID: {
            required: false,
            serializedName: 'CreatorGroupID',
            type: {
              name: 'Number'
            }
          },
          creatorGroupName: {
            required: false,
            serializedName: 'CreatorGroupName',
            type: {
              name: 'String'
            }
          },
          modifierUserID: {
            required: false,
            serializedName: 'ModifierUserID',
            type: {
              name: 'Number'
            }
          },
          modifierUserFullName: {
            required: false,
            serializedName: 'ModifierUserFullName',
            type: {
              name: 'String'
            }
          },
          modifierGroupID: {
            required: false,
            serializedName: 'ModifierGroupID',
            type: {
              name: 'Number'
            }
          },
          modifierGroupName: {
            required: false,
            serializedName: 'ModifierGroupName',
            type: {
              name: 'String'
            }
          },
          creationTime: {
            required: false,
            serializedName: 'CreationTime',
            type: {
              name: 'DateTime'
            }
          },
          modificationTime: {
            required: false,
            serializedName: 'ModificationTime',
            type: {
              name: 'DateTime'
            }
          },
          accessTime: {
            required: false,
            serializedName: 'AccessTime',
            type: {
              name: 'DateTime'
            }
          },
          resolutionTime: {
            required: false,
            serializedName: 'ResolutionTime',
            type: {
              name: 'DateTime'
            }
          },
          category: {
            required: false,
            serializedName: 'Category',
            type: {
              name: 'Number'
            }
          },
          reservedInt1: {
            required: false,
            serializedName: 'ReservedInt1',
            type: {
              name: 'Number'
            }
          },
          reservedInt2: {
            required: false,
            serializedName: 'ReservedInt2',
            type: {
              name: 'Number'
            }
          },
          reservedString1: {
            required: false,
            serializedName: 'ReservedString1',
            type: {
              name: 'String'
            }
          },
          state: {
            required: false,
            serializedName: 'State',
            type: {
              name: 'String'
            }
          },
          name: {
            required: false,
            serializedName: 'Name',
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

module.exports = GetEntityBaseResponse;
