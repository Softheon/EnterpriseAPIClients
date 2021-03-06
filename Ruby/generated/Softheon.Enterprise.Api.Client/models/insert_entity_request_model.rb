# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

module Softheon.Enterprise.Api.Client
  module Models
    #
    # The Insert Entity Model.
    #
    class InsertEntityRequestModel
      # @return [Array<ProfileModel>] Gets or sets the profiles.
      attr_accessor :profiles

      # @return [Integer] Gets or sets the access control list.
      attr_accessor :acl

      # @return [Integer] Gets or sets the type.
      attr_accessor :type

      # @return [String] Gets or sets the Name.
      attr_accessor :name


      #
      # Mapper for InsertEntityRequestModel class as Ruby Hash.
      # This will be used for serialization/deserialization.
      #
      def self.mapper()
        {
          client_side_validation: true,
          required: false,
          serialized_name: 'InsertEntityRequestModel',
          type: {
            name: 'Composite',
            class_name: 'InsertEntityRequestModel',
            model_properties: {
              profiles: {
                client_side_validation: true,
                required: false,
                serialized_name: 'Profiles',
                type: {
                  name: 'Sequence',
                  element: {
                      client_side_validation: true,
                      required: false,
                      serialized_name: 'ProfileModelElementType',
                      type: {
                        name: 'Composite',
                        class_name: 'ProfileModel'
                      }
                  }
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
                constraints: {
                  InclusiveMaximum: 2147483647,
                  InclusiveMinimum: 1
                },
                type: {
                  name: 'Number'
                }
              },
              name: {
                client_side_validation: true,
                required: true,
                serialized_name: 'Name',
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
