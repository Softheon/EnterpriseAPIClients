# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # Defines properties and methods for workflow queues
    #
    class WorkflowQueueModel
      # @return [Enum] Gets or sets the type of the workflow. Possible values
      # include: 'Uncategorized', 'Auto', 'StraightThrough', 'Exception',
      # 'Holding', 'Any'
      attr_accessor :workflow_type

      # @return [Integer] Gets or sets the index.
      attr_accessor :index

      # @return [Integer] Gets or sets the subindex.
      attr_accessor :sub_index

      # @return [Integer] Gets or sets the identifier.
      attr_accessor :id

      # @return [Integer] Gets or sets the user count.
      attr_accessor :user_count

      # @return [Integer] Gets or sets the task count.
      attr_accessor :task_count

      # @return [String] Gets or sets the name.
      attr_accessor :name

      # @return [String] Gets or sets the alias.
      attr_accessor :alias_property

      # @return [Enum] Gets or sets the state. Possible values include:
      # 'Inactive', 'Active'
      attr_accessor :state

      # @return [Enum] Gets or sets the type. Possible values include:
      # 'Inbound', 'Outbound', 'Access', 'Any', 'Shared', 'Public', 'Recycle',
      # 'Fax', 'Print', 'Scan', 'Ocr', 'Workflow', 'Schedule', 'System',
      # 'Other', 'CdoInfostore', 'CdoFolder'
      attr_accessor :type

      # @return [String] Gets or sets the category.
      attr_accessor :category

      # @return [String] Gets or sets the description.
      attr_accessor :description

      # @return [Integer] Gets or sets the reserved integer 1.
      attr_accessor :reserved_int1

      # @return [Integer] Gets or sets the reserved integer 2.
      attr_accessor :reserved_int2

      # @return [String] Gets or sets the reserved string 1.
      attr_accessor :reserved_string1

      # @return [String] Gets or sets the reserved string 2.
      attr_accessor :reserved_string2


      #
      # Mapper for WorkflowQueueModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'WorkflowQueueModel',
          type: {
            name: 'Composite',
            class_name: 'WorkflowQueueModel',
            model_properties: {
              workflow_type: {
                client_side_validation: true,
                required: false,
                serialized_name: 'WorkflowType',
                type: {
                  name: 'String'
                }
              },
              index: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Index',
                type: {
                  name: 'Number'
                }
              },
              sub_index: {
                client_side_validation: true,
                required: false,
                serialized_name: 'SubIndex',
                type: {
                  name: 'Number'
                }
              },
              id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ID',
                type: {
                  name: 'Number'
                }
              },
              user_count: {
                client_side_validation: true,
                required: false,
                serialized_name: 'UserCount',
                type: {
                  name: 'Number'
                }
              },
              task_count: {
                client_side_validation: true,
                required: false,
                serialized_name: 'TaskCount',
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
              alias_property: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Alias',
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
              category: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Category',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              description: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Description',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
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
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              reserved_string2: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ReservedString2',
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
