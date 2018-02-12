/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

/**
 * Note Base Class.
 *
 */
class NoteBase {
  /**
   * Create a NoteBase.
   * @member {number} [acl] Gets or sets the acl.
   * @member {string} [name] Gets or sets the name.
   * @member {string} [note] Gets or sets the note.
   */
  constructor() {
  }

  /**
   * Defines the metadata of NoteBase
   *
   * @returns {object} metadata of NoteBase
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'NoteBase',
      type: {
        name: 'Composite',
        className: 'NoteBase',
        modelProperties: {
          acl: {
            required: false,
            serializedName: 'Acl',
            type: {
              name: 'Number'
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
          },
          note: {
            required: false,
            serializedName: 'Note',
            constraints: {
              MaxLength: 8000,
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

module.exports = NoteBase;
