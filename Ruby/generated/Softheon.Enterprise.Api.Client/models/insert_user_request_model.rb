# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Model for POST User input parameters.
    #
    class InsertUserRequestModel
      # @return [String] Gets or sets the username.
      attr_accessor :username

      # @return [Enum] Gets or sets the state. Possible values include:
      # 'Active', 'Inactive'
      attr_accessor :state

      # @return [Enum] Gets or sets the type. Possible values include:
      # 'ImageDesk', 'PublishDesk', 'FaxDesk', 'CaptureDesk',
      # 'RecognitionDesk', 'PortalUser', 'AdminDesk', 'WorkflowDesk',
      # 'Benchmark', 'ReportDesk', 'ColdDesk', 'PortalDesk',
      # 'WorkflowArchitect', 'DocumentDesk', 'Poweruser'
      attr_accessor :type

      # @return [String] Gets or sets the full name.
      attr_accessor :full_name

      # @return [String] Gets or sets the ip address.
      attr_accessor :ipaddress

      # @return [Integer] Gets or sets the entity acl.
      attr_accessor :entity_acl

      # @return [Integer] Gets or sets the attachment acl.
      attr_accessor :attachment_acl

      # @return [Integer] Gets or sets the note acl.
      attr_accessor :note_acl

      # @return [Integer] Gets or sets the entity feature.
      attr_accessor :entity_feature

      # @return [Integer] Gets or sets the attachment feature.
      attr_accessor :attachment_feature

      # @return [Integer] Gets or sets the note feature.
      attr_accessor :note_feature

      # @return [Enum] Gets or sets the admin mask. Possible values include:
      # 'None', 'CabinetAdmin', 'DrawerAdmin', 'GroupAdmin', 'UserAdmin',
      # 'WorkflowAdmin', 'VersionAdmin', 'TemplateAdmin', 'ApplicationAdmin'
      attr_accessor :admin_mask

      # @return [String] Gets or sets the address.
      attr_accessor :address


      #
      # Mapper for InsertUserRequestModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'InsertUserRequestModel',
          type: {
            name: 'Composite',
            class_name: 'InsertUserRequestModel',
            model_properties: {
              username: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Username',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
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
              type: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Type',
                type: {
                  name: 'String'
                }
              },
              full_name: {
                client_side_validation: true,
                required: true,
                serialized_name: 'FullName',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              ipaddress: {
                client_side_validation: true,
                required: true,
                serialized_name: 'IPAddress',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              entity_acl: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EntityAcl',
                type: {
                  name: 'Number'
                }
              },
              attachment_acl: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AttachmentAcl',
                type: {
                  name: 'Number'
                }
              },
              note_acl: {
                client_side_validation: true,
                required: false,
                serialized_name: 'NoteAcl',
                type: {
                  name: 'Number'
                }
              },
              entity_feature: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EntityFeature',
                type: {
                  name: 'Number'
                }
              },
              attachment_feature: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AttachmentFeature',
                type: {
                  name: 'Number'
                }
              },
              note_feature: {
                client_side_validation: true,
                required: false,
                serialized_name: 'NoteFeature',
                type: {
                  name: 'Number'
                }
              },
              admin_mask: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AdminMask',
                type: {
                  name: 'String'
                }
              },
              address: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Address',
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
