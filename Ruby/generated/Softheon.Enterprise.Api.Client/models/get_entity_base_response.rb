# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # The summary model that is sent in response to a GET request for Entity
    #
    class GetEntityBaseResponse
      # @return [Integer] Gets or sets the entity identifier.
      attr_accessor :id

      # @return [Integer] Gets or sets the drawer identifier.
      attr_accessor :drawer_id

      # @return [Integer] Gets or sets the access control list.
      attr_accessor :acl

      # @return [Integer] Gets or sets the type.
      attr_accessor :type

      # @return [Integer] Gets or sets the subtype.
      attr_accessor :subtype

      # @return [Integer] Gets or sets the age.
      attr_accessor :age

      # @return [Integer] Gets or sets the reference identifier.
      attr_accessor :reference_count

      # @return [Integer] Gets or sets the access count.
      attr_accessor :access_count

      # @return [Integer] Gets or sets the profile count.
      attr_accessor :profile_count

      # @return [Integer] Gets or sets the attach count.
      attr_accessor :attach_count

      # @return [Integer] Gets or sets the note count.
      attr_accessor :note_count

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

      # @return [Integer] Gets or sets the creator group identifier.
      attr_accessor :creator_group_id

      # @return [String] Gets or sets the name of the creator group.
      attr_accessor :creator_group_name

      # @return [Integer] Gets or sets the modifier user identifier.
      attr_accessor :modifier_user_id

      # @return [String] Gets or sets the full name of the modifier user.
      attr_accessor :modifier_user_full_name

      # @return [Integer] Gets or sets the modifier group identifier.
      attr_accessor :modifier_group_id

      # @return [String] Gets or sets the name of the modifier group.
      attr_accessor :modifier_group_name

      # @return [DateTime] Gets or sets the creation time.
      attr_accessor :creation_time

      # @return [DateTime] Gets or sets the modification time.
      attr_accessor :modification_time

      # @return [DateTime] Gets or sets the access time.
      attr_accessor :access_time

      # @return [DateTime] Gets or sets the resolution time.
      attr_accessor :resolution_time

      # @return [Integer] Gets or sets the category.
      attr_accessor :category

      # @return [Integer] Gets or sets the reserved int1.
      attr_accessor :reserved_int1

      # @return [Integer] Gets or sets the reserved int2.
      attr_accessor :reserved_int2

      # @return [String] Gets or sets the reserved string1.
      attr_accessor :reserved_string1

      # @return [Enum] Gets or sets the state. Possible values include:
      # 'Undefined', 'Available', 'Locked', 'Suspended', 'Archived', 'Deleted',
      # 'Canceled', 'Complete', 'Reviewed', 'ReviewedSuspended',
      # 'ReviewedComplete', 'Rejected', 'RoutingSlipOpen',
      # 'ReviewedRoutingSlipOpen'
      attr_accessor :state

      # @return [String] Gets or sets the name.
      attr_accessor :name


      #
      # Mapper for GetEntityBaseResponse class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'GetEntityBaseResponse',
          type: {
            name: 'Composite',
            class_name: 'GetEntityBaseResponse',
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
              acl: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Acl',
                type: {
                  name: 'Number'
                }
              },
              type: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Type',
                type: {
                  name: 'Number'
                }
              },
              subtype: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Subtype',
                type: {
                  name: 'Number'
                }
              },
              age: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Age',
                type: {
                  name: 'Number'
                }
              },
              reference_count: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReferenceCount',
                type: {
                  name: 'Number'
                }
              },
              access_count: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AccessCount',
                type: {
                  name: 'Number'
                }
              },
              profile_count: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ProfileCount',
                type: {
                  name: 'Number'
                }
              },
              attach_count: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AttachCount',
                type: {
                  name: 'Number'
                }
              },
              note_count: {
                client_side_validation: true,
                required: false,
                serialized_name: 'NoteCount',
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
              creator_group_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'CreatorGroupID',
                type: {
                  name: 'Number'
                }
              },
              creator_group_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'CreatorGroupName',
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
              modifier_group_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ModifierGroupID',
                type: {
                  name: 'Number'
                }
              },
              modifier_group_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ModifierGroupName',
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
              access_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AccessTime',
                type: {
                  name: 'DateTime'
                }
              },
              resolution_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ResolutionTime',
                type: {
                  name: 'DateTime'
                }
              },
              category: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Category',
                type: {
                  name: 'Number'
                }
              },
              reserved_int1: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedInt1',
                type: {
                  name: 'Number'
                }
              },
              reserved_int2: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedInt2',
                type: {
                  name: 'Number'
                }
              },
              reserved_string1: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedString1',
                type: {
                  name: 'String'
                }
              },
              state: {
                client_side_validation: true,
                required: false,
                serialized_name: 'State',
                type: {
                  name: 'String'
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
              }
            }
          }
        }
      end
    end
  end
end
