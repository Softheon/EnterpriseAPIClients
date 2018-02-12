# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # The model that is sent in response to a GET request for Notes
    #
    class NoteModel
      # @return [Integer] Gets or sets the identifier.
      attr_accessor :id

      # @return [Integer] Gets or sets the drawer identifier.
      attr_accessor :drawer_id

      # @return [Integer] Gets or sets the entity identifier.
      attr_accessor :entity_id

      # @return [Integer] Gets or sets the owner user identifier.
      attr_accessor :owner_user_id

      # @return [String] Gets or sets the full name of the owner user.
      attr_accessor :owner_user_full_name

      # @return [Integer] Gets or sets the owner group identifier.
      attr_accessor :owner_group_id

      # @return [String] Gets or sets the name of the owner group.
      attr_accessor :owner_group_name

      # @return [Integer] Gets or sets the creator user identifier.
      attr_accessor :creator_user_id

      # @return [String] Gets or sets the full name of the creator user.
      attr_accessor :creator_user_full_name

      # @return [Integer] Gets or sets the modifier user identifier.
      attr_accessor :modifier_user_id

      # @return [String] Gets or sets the full name of the modifier user.
      attr_accessor :modifier_user_full_name

      # @return [DateTime] Gets or sets the creation time.
      attr_accessor :creation_time

      # @return [DateTime] Gets or sets the modification time.
      attr_accessor :modification_time

      # @return [Integer] Gets or sets the parent identifier.
      attr_accessor :parent_id

      # @return [Integer] Gets or sets the acl.
      attr_accessor :acl

      # @return [String] Gets or sets the name.
      attr_accessor :name

      # @return [String] Gets or sets the note.
      attr_accessor :note


      #
      # Mapper for NoteModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'NoteModel',
          type: {
            name: 'Composite',
            class_name: 'NoteModel',
            model_properties: {
              id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ID',
                type: {
                  name: 'Number'
                }
              },
              drawer_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'DrawerID',
                type: {
                  name: 'Number'
                }
              },
              entity_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EntityID',
                type: {
                  name: 'Number'
                }
              },
              owner_user_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'OwnerUserID',
                type: {
                  name: 'Number'
                }
              },
              owner_user_full_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'OwnerUserFullName',
                type: {
                  name: 'String'
                }
              },
              owner_group_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'OwnerGroupID',
                type: {
                  name: 'Number'
                }
              },
              owner_group_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'OwnerGroupName',
                type: {
                  name: 'String'
                }
              },
              creator_user_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'CreatorUserID',
                type: {
                  name: 'Number'
                }
              },
              creator_user_full_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'CreatorUserFullName',
                type: {
                  name: 'String'
                }
              },
              modifier_user_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ModifierUserID',
                type: {
                  name: 'Number'
                }
              },
              modifier_user_full_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ModifierUserFullName',
                type: {
                  name: 'String'
                }
              },
              creation_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'CreationTime',
                type: {
                  name: 'DateTime'
                }
              },
              modification_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ModificationTime',
                type: {
                  name: 'DateTime'
                }
              },
              parent_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ParentID',
                type: {
                  name: 'Number'
                }
              },
              acl: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Acl',
                type: {
                  name: 'Number'
                }
              },
              name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Name',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              note: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Note',
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
        }
      end
    end
  end
end