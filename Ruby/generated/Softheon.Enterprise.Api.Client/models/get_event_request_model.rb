# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Model for the GET Event input parameters
    #
    class GetEventRequestModel
      # @return [Integer] Gets or sets the drawer identifier.
      attr_accessor :drawer_id

      # @return [Integer] Gets or sets the entity identifier.
      attr_accessor :entity_id

      # @return [Enum] Gets or sets the type. Possible values include:
      # 'Undefined', 'Fatal', 'Warning', 'Info', 'Debug', 'Process', 'RPC',
      # 'SQL', 'DDE'
      attr_accessor :type

      # @return [DateTime] Gets or sets the minimum event time.
      attr_accessor :min_event_time

      # @return [DateTime] Gets or sets the maximum event time.
      attr_accessor :max_event_time

      # @return [Integer] Gets or sets the event user identifier.
      attr_accessor :event_user_id

      # @return [Integer] Gets or sets the event group identifier.
      attr_accessor :event_group_id

      # @return [Enum] Gets or sets the category. Possible values include:
      # 'Undefined', 'Entity', 'Profile', 'Attachment', 'Discussion', 'Field',
      # 'Workflow'
      attr_accessor :category

      # @return [Enum] Gets or sets the class. Possible values include:
      # 'Undefined', 'Application', 'Security', 'System'
      attr_accessor :class_property

      # @return [Enum] Gets or sets the operation. Possible values include:
      # 'Undefined', 'Insert', 'Update', 'Delete', 'Copy', 'Lock', 'Unlock',
      # 'Open', 'Close', 'Checkout', 'Checkin', 'View', 'Merge', 'Split',
      # 'Classify', 'Null', 'OpenWF', 'Remove', 'ReturnToTop',
      # 'ReturnToBottom', 'Accept', 'Suspend', 'Reject', 'Route', 'Forward',
      # 'Reply', 'Reassign', 'Reset', 'Override', 'Rollback', 'Archive'
      attr_accessor :operation

      # @return [Integer] Gets or sets the minimum processing time.
      attr_accessor :min_processing_time

      # @return [Integer] Gets or sets the maximum processing time.
      attr_accessor :max_processing_time

      # @return [Integer] Gets or sets the page number.
      attr_accessor :page

      # @return [Integer] Gets or sets the size of the page.
      attr_accessor :page_size

      # @return [Enum] Gets or sets the order. Possible values include:
      # 'Unspecified', 'Ascending', 'Descending'
      attr_accessor :sort_order

      # @return [Enum] Gets or sets the column to order by. Possible values
      # include: 'ID', 'Type', 'EventTime'
      attr_accessor :sort_by


      #
      # Mapper for GetEventRequestModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'GetEventRequestModel',
          type: {
            name: 'Composite',
            class_name: 'GetEventRequestModel',
            model_properties: {
              drawer_id: {
                client_side_validation: true,
                required: true,
                serialized_name: 'DrawerID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              entity_id: {
                client_side_validation: true,
                required: true,
                serialized_name: 'EntityID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
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
              min_event_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MinEventTime',
                type: {
                  name: 'DateTime'
                }
              },
              max_event_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MaxEventTime',
                type: {
                  name: 'DateTime'
                }
              },
              event_user_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EventUserID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              event_group_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EventGroupID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              category: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Category',
                type: {
                  name: 'String'
                }
              },
              class_property: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Class',
                type: {
                  name: 'String'
                }
              },
              operation: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Operation',
                type: {
                  name: 'String'
                }
              },
              min_processing_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MinProcessingTime',
                type: {
                  name: 'Number'
                }
              },
              max_processing_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'MaxProcessingTime',
                type: {
                  name: 'Number'
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