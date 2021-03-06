# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class UpdateEntityRequestModel(Model):
    """The model for PUT Entity input parameters.

    :param profiles: Gets or sets the profiles.
    :type profiles: list[~softheon.enterprise.api.client.models.ProfileModel]
    :param state: Gets or sets the state. Possible values include:
     'Undefined', 'Available', 'Locked', 'Suspended', 'Archived', 'Deleted',
     'Canceled', 'Complete', 'Reviewed', 'ReviewedSuspended',
     'ReviewedComplete', 'Rejected', 'RoutingSlipOpen',
     'ReviewedRoutingSlipOpen'
    :type state: str or ~softheon.enterprise.api.client.models.enum
    :param name: Gets or sets the name.
    :type name: str
    """

    _validation = {
        'name': {'max_length': 255, 'min_length': 0},
    }

    _attribute_map = {
        'profiles': {'key': 'Profiles', 'type': '[ProfileModel]'},
        'state': {'key': 'State', 'type': 'str'},
        'name': {'key': 'Name', 'type': 'str'},
    }

    def __init__(self, profiles=None, state=None, name=None):
        super(UpdateEntityRequestModel, self).__init__()
        self.profiles = profiles
        self.state = state
        self.name = name
