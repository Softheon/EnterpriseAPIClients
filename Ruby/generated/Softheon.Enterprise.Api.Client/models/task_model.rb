# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # The model that is sent in response to a GET request for Tasks
    #
    class TaskModel
      # @return [Integer] Gets or sets the task identifier.
      attr_accessor :task_id

      # @return [Integer] Gets or sets the queue identifier.
      attr_accessor :queue_id

      # @return [Integer] Gets or sets the drawer identifier.
      attr_accessor :drawer_id

      # @return [Integer] Gets or sets the object identifier (entity).
      attr_accessor :object_id

      # @return [Integer] Gets or sets the type of the object (entity).
      attr_accessor :object_type

      # @return [Integer] Gets or sets the task owner user identifier.
      attr_accessor :owner_user_id

      # @return [String] Gets or sets the full name of the owner user.
      attr_accessor :owner_user_full_name

      # @return [Integer] Gets or sets the task owner group identifier.
      attr_accessor :owner_group_id

      # @return [String] Gets or sets the name of the owner group.
      attr_accessor :owner_group_name

      # @return [Integer] Gets or sets the effective user identifier.
      attr_accessor :effective_user_id

      # @return [String] Gets or sets the full name of the effective user.
      attr_accessor :effective_user_full_name

      # @return [Integer] Gets or sets the effective group identifier.
      attr_accessor :effective_group_id

      # @return [String] Gets or sets the name of the effective group.
      attr_accessor :effective_group_name

      # @return [Integer] Gets or sets the previous queue identifier.
      attr_accessor :prev_queue_id

      # @return [Integer] Gets or sets the next queue identifier.
      attr_accessor :next_queue_id

      # @return [DateTime] Gets or sets the task insertion time.
      attr_accessor :insertion_time

      # @return [Integer] Gets or sets the address identifier.
      attr_accessor :address_id

      # @return [String] Gets or sets the description of the task.
      attr_accessor :description

      # @return [String] Gets or sets message 1.
      attr_accessor :message1

      # @return [String] Gets or sets message 2.
      attr_accessor :message2

      # @return [String] Gets or sets message 3.
      attr_accessor :message3

      # @return [String] Gets or sets message 4.
      attr_accessor :message4

      # @return [String] Gets or sets message5.
      attr_accessor :message5

      # @return [String] Gets or sets message 6.
      attr_accessor :message6

      # @return [String] Gets or sets message 7.
      attr_accessor :message7

      # @return [String] Gets or sets message 8.
      attr_accessor :message8

      # @return [String] Gets or sets message 9.
      attr_accessor :message9

      # @return [String] Gets or sets message 10.
      attr_accessor :message10

      # @return [String] Gets or sets message 11.
      attr_accessor :message11

      # @return [String] Gets or sets message 12.
      attr_accessor :message12

      # @return [String] Gets or sets message 13.
      attr_accessor :message13

      # @return [String] Gets or sets message 14.
      attr_accessor :message14

      # @return [String] Gets or sets message 15.
      attr_accessor :message15

      # @return [String] Gets or sets message 16.
      attr_accessor :message16

      # @return [Integer] Gets or sets the task state.
      attr_accessor :state

      # @return [Integer] Gets or sets the task priority.
      attr_accessor :priority

      # @return [DateTime] Gets or sets the task resolution time.
      attr_accessor :resolution_time

      # @return [String] Gets or sets the task file attachment name.
      attr_accessor :task_file_attachment

      # @return [Integer] Gets or sets reserved integer 1.
      attr_accessor :reserved_int1

      # @return [String] Gets or sets reserved string 1.
      attr_accessor :reserved_string1


      #
      # Mapper for TaskModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'TaskModel',
          type: {
            name: 'Composite',
            class_name: 'TaskModel',
            model_properties: {
              task_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'TaskID',
                type: {
                  name: 'Number'
                }
              },
              queue_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'QueueID',
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
              object_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ObjectID',
                type: {
                  name: 'Number'
                }
              },
              object_type: {
                client_side_validation: true,
                required: false,
                serialized_name: 'ObjectType',
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
              effective_user_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EffectiveUserID',
                type: {
                  name: 'Number'
                }
              },
              effective_user_full_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EffectiveUserFullName',
                type: {
                  name: 'String'
                }
              },
              effective_group_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EffectiveGroupID',
                type: {
                  name: 'Number'
                }
              },
              effective_group_name: {
                client_side_validation: true,
                required: false,
                serialized_name: 'EffectiveGroupName',
                type: {
                  name: 'String'
                }
              },
              prev_queue_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'PrevQueueID',
                type: {
                  name: 'Number'
                }
              },
              next_queue_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'NextQueueID',
                type: {
                  name: 'Number'
                }
              },
              insertion_time: {
                client_side_validation: true,
                required: false,
                serialized_name: 'InsertionTime',
                type: {
                  name: 'DateTime'
                }
              },
              address_id: {
                client_side_validation: true,
                required: false,
                serialized_name: 'AddressID',
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 0
                },
                type: {
                  name: 'Number'
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
              message1: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message1',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message2: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message2',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message3: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message3',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message4: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message4',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message5: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message5',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message6: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message6',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message7: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message7',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message8: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message8',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message9: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message9',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message10: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message10',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message11: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message11',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message12: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message12',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message13: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message13',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message14: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message14',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message15: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message15',
                constraints: {
                  MaxLength: 255,
                  MinLength: 0
                },
                type: {
                  name: 'String'
                }
              },
              message16: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Message16',
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
                  name: 'Number'
                }
              },
              priority: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Priority',
                type: {
                  name: 'Number'
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
              task_file_attachment: {
                client_side_validation: true,
                required: false,
                serialized_name: 'TaskFileAttachment',
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
              }
            }
          }
        }
      end
    end
  end
end
