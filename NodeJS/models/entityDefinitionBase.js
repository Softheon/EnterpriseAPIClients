/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

const models = require('./index');

/**
 * The entity definition base, also acts as the insert model.
 *
 */
class EntityDefinitionBase {
  /**
   * Create a EntityDefinitionBase.
   * @member {number} type Gets or sets the type of template.
   * @member {string} category Gets or sets the category of template.
   * @member {string} name Gets or sets the name of template.
   * @member {boolean} [hasClass] Gets or sets if the template has classes.
   * @member {boolean} [hasSecurity] Gets or sets if the template has security.
   * @member {boolean} [hasProfiles] Gets or sets if the template has profiles.
   * @member {boolean} [hasItems] Gets or sets the has items.
   * @member {string} [smallImage] Gets or sets the small image.
   * @member {string} [largeImage] Gets or sets the large image.
   * @member {boolean} [hasAudit] Gets or sets if the template has auditing
   * enabled.
   * @member {boolean} [allowsViewImages] Gets or sets if the template allows
   * viewing images.
   * @member {boolean} [isReviewState] Gets or sets if the entity is created in
   * a review state.
   * @member {string} [reservedString1] Gets or sets the reserved string1.
   * @member {string} [reservedString2] Gets or sets the reserved string2.
   * @member {number} [reservedInt1] Gets or sets the reserved int1.
   * @member {number} [reservedInt2] Gets or sets the reserved int2.
   * @member {array} [drawers] Gets or sets the drawers.
   * @member {array} [profiles] Gets or sets the profiles.
   */
  constructor() {
  }

  /**
   * Defines the metadata of EntityDefinitionBase
   *
   * @returns {object} metadata of EntityDefinitionBase
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'EntityDefinitionBase',
      type: {
        name: 'Composite',
        className: 'EntityDefinitionBase',
        modelProperties: {
          type: {
            required: true,
            serializedName: 'Type',
            constraints: {
              InclusiveMaximum: 2147483647,
              InclusiveMinimum: 1
            },
            type: {
              name: 'Number'
            }
          },
          category: {
            required: true,
            serializedName: 'Category',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          name: {
            required: true,
            serializedName: 'Name',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          hasClass: {
            required: false,
            serializedName: 'HasClass',
            type: {
              name: 'Boolean'
            }
          },
          hasSecurity: {
            required: false,
            serializedName: 'HasSecurity',
            type: {
              name: 'Boolean'
            }
          },
          hasProfiles: {
            required: false,
            serializedName: 'HasProfiles',
            type: {
              name: 'Boolean'
            }
          },
          hasItems: {
            required: false,
            serializedName: 'HasItems',
            type: {
              name: 'Boolean'
            }
          },
          smallImage: {
            required: false,
            serializedName: 'SmallImage',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          largeImage: {
            required: false,
            serializedName: 'LargeImage',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          hasAudit: {
            required: false,
            serializedName: 'HasAudit',
            type: {
              name: 'Boolean'
            }
          },
          allowsViewImages: {
            required: false,
            serializedName: 'AllowsViewImages',
            type: {
              name: 'Boolean'
            }
          },
          isReviewState: {
            required: false,
            serializedName: 'IsReviewState',
            type: {
              name: 'Boolean'
            }
          },
          reservedString1: {
            required: false,
            serializedName: 'ReservedString1',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          reservedString2: {
            required: false,
            serializedName: 'ReservedString2',
            constraints: {
              MaxLength: 255,
              MinLength: 0
            },
            type: {
              name: 'String'
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
          drawers: {
            required: false,
            serializedName: 'Drawers',
            type: {
              name: 'Sequence',
              element: {
                  required: false,
                  serializedName: 'NumberElementType',
                  type: {
                    name: 'Number'
                  }
              }
            }
          },
          profiles: {
            required: false,
            serializedName: 'Profiles',
            type: {
              name: 'Sequence',
              element: {
                  required: false,
                  serializedName: 'ProfileDefinitionModelElementType',
                  type: {
                    name: 'Composite',
                    className: 'ProfileDefinitionModel'
                  }
              }
            }
          }
        }
      }
    };
  }
}

module.exports = EntityDefinitionBase;
