# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class GetEntityBaseResponse(Model):
    """The summary model that is sent in response to a GET request for Entity.

    :param id: Gets or sets the entity identifier.
    :type id: int
    :param drawer_id: Gets or sets the drawer identifier.
    :type drawer_id: int
    :param acl: Gets or sets the access control list.
    :type acl: int
    :param type: Gets or sets the type.
    :type type: int
    :param subtype: Gets or sets the subtype.
    :type subtype: int
    :param age: Gets or sets the age.
    :type age: int
    :param reference_count: Gets or sets the reference identifier.
    :type reference_count: int
    :param access_count: Gets or sets the access count.
    :type access_count: int
    :param profile_count: Gets or sets the profile count.
    :type profile_count: int
    :param attach_count: Gets or sets the attach count.
    :type attach_count: int
    :param note_count: Gets or sets the note count.
    :type note_count: int
    :param owner_user_id: Gets or sets the owner user identifier.
    :type owner_user_id: int
    :param owner_user_full_name: Gets or sets the full name of the owner user.
    :type owner_user_full_name: str
    :param owner_group_id: Gets or sets the owner group identifier.
    :type owner_group_id: int
    :param owner_group_name: Gets or sets the name of the owner group.
    :type owner_group_name: str
    :param creator_user_id: Gets or sets the creator user identifier.
    :type creator_user_id: int
    :param creator_user_full_name: Gets or sets the full name of the creator
     user.
    :type creator_user_full_name: str
    :param creator_group_id: Gets or sets the creator group identifier.
    :type creator_group_id: int
    :param creator_group_name: Gets or sets the name of the creator group.
    :type creator_group_name: str
    :param modifier_user_id: Gets or sets the modifier user identifier.
    :type modifier_user_id: int
    :param modifier_user_full_name: Gets or sets the full name of the modifier
     user.
    :type modifier_user_full_name: str
    :param modifier_group_id: Gets or sets the modifier group identifier.
    :type modifier_group_id: int
    :param modifier_group_name: Gets or sets the name of the modifier group.
    :type modifier_group_name: str
    :param creation_time: Gets or sets the creation time.
    :type creation_time: datetime
    :param modification_time: Gets or sets the modification time.
    :type modification_time: datetime
    :param access_time: Gets or sets the access time.
    :type access_time: datetime
    :param resolution_time: Gets or sets the resolution time.
    :type resolution_time: datetime
    :param category: Gets or sets the category.
    :type category: int
    :param reserved_int1: Gets or sets the reserved int1.
    :type reserved_int1: int
    :param reserved_int2: Gets or sets the reserved int2.
    :type reserved_int2: int
    :param reserved_string1: Gets or sets the reserved string1.
    :type reserved_string1: str
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
        'id': {'key': 'ID', 'type': 'int'},
        'drawer_id': {'key': 'DrawerID', 'type': 'int'},
        'acl': {'key': 'Acl', 'type': 'int'},
        'type': {'key': 'Type', 'type': 'int'},
        'subtype': {'key': 'Subtype', 'type': 'int'},
        'age': {'key': 'Age', 'type': 'int'},
        'reference_count': {'key': 'ReferenceCount', 'type': 'int'},
        'access_count': {'key': 'AccessCount', 'type': 'int'},
        'profile_count': {'key': 'ProfileCount', 'type': 'int'},
        'attach_count': {'key': 'AttachCount', 'type': 'int'},
        'note_count': {'key': 'NoteCount', 'type': 'int'},
        'owner_user_id': {'key': 'OwnerUserID', 'type': 'int'},
        'owner_user_full_name': {'key': 'OwnerUserFullName', 'type': 'str'},
        'owner_group_id': {'key': 'OwnerGroupID', 'type': 'int'},
        'owner_group_name': {'key': 'OwnerGroupName', 'type': 'str'},
        'creator_user_id': {'key': 'CreatorUserID', 'type': 'int'},
        'creator_user_full_name': {'key': 'CreatorUserFullName', 'type': 'str'},
        'creator_group_id': {'key': 'CreatorGroupID', 'type': 'int'},
        'creator_group_name': {'key': 'CreatorGroupName', 'type': 'str'},
        'modifier_user_id': {'key': 'ModifierUserID', 'type': 'int'},
        'modifier_user_full_name': {'key': 'ModifierUserFullName', 'type': 'str'},
        'modifier_group_id': {'key': 'ModifierGroupID', 'type': 'int'},
        'modifier_group_name': {'key': 'ModifierGroupName', 'type': 'str'},
        'creation_time': {'key': 'CreationTime', 'type': 'iso-8601'},
        'modification_time': {'key': 'ModificationTime', 'type': 'iso-8601'},
        'access_time': {'key': 'AccessTime', 'type': 'iso-8601'},
        'resolution_time': {'key': 'ResolutionTime', 'type': 'iso-8601'},
        'category': {'key': 'Category', 'type': 'int'},
        'reserved_int1': {'key': 'ReservedInt1', 'type': 'int'},
        'reserved_int2': {'key': 'ReservedInt2', 'type': 'int'},
        'reserved_string1': {'key': 'ReservedString1', 'type': 'str'},
        'state': {'key': 'State', 'type': 'str'},
        'name': {'key': 'Name', 'type': 'str'},
    }

    def __init__(self, id=None, drawer_id=None, acl=None, type=None, subtype=None, age=None, reference_count=None, access_count=None, profile_count=None, attach_count=None, note_count=None, owner_user_id=None, owner_user_full_name=None, owner_group_id=None, owner_group_name=None, creator_user_id=None, creator_user_full_name=None, creator_group_id=None, creator_group_name=None, modifier_user_id=None, modifier_user_full_name=None, modifier_group_id=None, modifier_group_name=None, creation_time=None, modification_time=None, access_time=None, resolution_time=None, category=None, reserved_int1=None, reserved_int2=None, reserved_string1=None, state=None, name=None):
        super(GetEntityBaseResponse, self).__init__()
        self.id = id
        self.drawer_id = drawer_id
        self.acl = acl
        self.type = type
        self.subtype = subtype
        self.age = age
        self.reference_count = reference_count
        self.access_count = access_count
        self.profile_count = profile_count
        self.attach_count = attach_count
        self.note_count = note_count
        self.owner_user_id = owner_user_id
        self.owner_user_full_name = owner_user_full_name
        self.owner_group_id = owner_group_id
        self.owner_group_name = owner_group_name
        self.creator_user_id = creator_user_id
        self.creator_user_full_name = creator_user_full_name
        self.creator_group_id = creator_group_id
        self.creator_group_name = creator_group_name
        self.modifier_user_id = modifier_user_id
        self.modifier_user_full_name = modifier_user_full_name
        self.modifier_group_id = modifier_group_id
        self.modifier_group_name = modifier_group_name
        self.creation_time = creation_time
        self.modification_time = modification_time
        self.access_time = access_time
        self.resolution_time = resolution_time
        self.category = category
        self.reserved_int1 = reserved_int1
        self.reserved_int2 = reserved_int2
        self.reserved_string1 = reserved_string1
        self.state = state
        self.name = name
