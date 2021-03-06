# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Model for the GET Attachment Version input parameters
    #
    class GetAttachmentVersionRequestModel
      # @return [Integer] Gets or sets the indexed version value.
      attr_accessor :version

      # @return [Integer] Gets or sets the creator identifier.
      attr_accessor :creator_user_id

      # @return [Integer] Gets or sets the identifier of the user who accessed
      # the attachment version.
      attr_accessor :accessor_user_id

      # @return [DateTime] Gets or sets the min time the version was last
      # accessed.
      attr_accessor :min_access_time

      # @return [DateTime] Gets or sets the max time the version was last
      # accessed.
      attr_accessor :max_access_time

      # @return [DateTime] Gets or sets the min creation time of the attachment
      # version.
      attr_accessor :min_creation_time

      # @return [DateTime] Gets or sets the max creation time of the attachment
      # version.
      attr_accessor :max_creation_time

      # @return [DateTime] Gets or sets the min modification time of the
      # attachment version.
      attr_accessor :min_modification_time

      # @return [DateTime] Gets or sets the max modification time of the
      # attachment version.
      attr_accessor :max_modification_time

      # @return [Integer] Gets or sets the page number.
      attr_accessor :page

      # @return [Integer] Gets or sets the size of the page.
      attr_accessor :page_size

      # @return [Enum] Gets or sets the order. Possible values include:
      # 'Unspecified', 'Ascending', 'Descending'
      attr_accessor :sort_order

      # @return [Enum] Gets or sets the column to order by. Possible values
      # include: 'Version', 'CreatorUserID', 'AccessorUserID', 'AccessTime',
      # 'CreationTime', 'ModificationTime'
      attr_accessor :sort_by


      #
      # Mapper for GetAttachmentVersionRequestModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'GetAttachmentVersionRequestModel',
          type: {
            name: 'Composite',
            class_name: 'GetAttachmentVersionRequestModel',
            model_properties: {
              version: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Version',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              creator_user_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'CreatorUserID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              accessor_user_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AccessorUserID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              min_access_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MinAccessTime',
                type: {
                  name: 'DateTime'
                }
              },
              max_access_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MaxAccessTime',
                type: {
                  name: 'DateTime'
                }
              },
              min_creation_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MinCreationTime',
                type: {
                  name: 'DateTime'
                }
              },
              max_creation_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MaxCreationTime',
                type: {
                  name: 'DateTime'
                }
              },
              min_modification_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MinModificationTime',
                type: {
                  name: 'DateTime'
                }
              },
              max_modification_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MaxModificationTime',
                type: {
                  name: 'DateTime'
                }
              },
              page: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Page',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              page_size: {
                client_side_validation: true,
                required: false,
                serialized_name: 'PageSize',
                constraints: {
                  InclusiveMaximum: 1000,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              sort_order: {
                client_side_validation: true,
                required: false,
                serialized_name: 'SortOrder',
                type: {
                  name: 'String'
                }
              },
              sort_by: {
                client_side_validation: true,
                required: false,
                serialized_name: 'SortBy',
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
