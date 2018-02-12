// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Microsoft.Rest;
    using Newtonsoft.Json;
    using System.Collections;
    using System.Collections.Generic;
    using System.Linq;

    /// <summary>
    /// The model that is sent in response to a GET request for Entity
    /// </summary>
    public partial class EntityModel
    {
        /// <summary>
        /// Initializes a new instance of the EntityModel class.
        /// </summary>
        public EntityModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the EntityModel class.
        /// </summary>
        /// <param name="profiles">Gets or sets the profiles.</param>
        /// <param name="id">Gets or sets the entity identifier.</param>
        /// <param name="drawerID">Gets or sets the drawer identifier.</param>
        /// <param name="acl">Gets or sets the access control list.</param>
        /// <param name="type">Gets or sets the type.</param>
        /// <param name="subtype">Gets or sets the subtype.</param>
        /// <param name="age">Gets or sets the age.</param>
        /// <param name="referenceCount">Gets or sets the reference
        /// identifier.</param>
        /// <param name="accessCount">Gets or sets the access count.</param>
        /// <param name="profileCount">Gets or sets the profile count.</param>
        /// <param name="attachCount">Gets or sets the attach count.</param>
        /// <param name="noteCount">Gets or sets the note count.</param>
        /// <param name="ownerUserID">Gets or sets the owner user
        /// identifier.</param>
        /// <param name="ownerUserFullName">Gets or sets the full name of the
        /// owner user.</param>
        /// <param name="ownerGroupID">Gets or sets the owner group
        /// identifier.</param>
        /// <param name="ownerGroupName">Gets or sets the name of the owner
        /// group.</param>
        /// <param name="creatorUserID">Gets or sets the creator user
        /// identifier.</param>
        /// <param name="creatorUserFullName">Gets or sets the full name of the
        /// creator user.</param>
        /// <param name="creatorGroupID">Gets or sets the creator group
        /// identifier.</param>
        /// <param name="creatorGroupName">Gets or sets the name of the creator
        /// group.</param>
        /// <param name="modifierUserID">Gets or sets the modifier user
        /// identifier.</param>
        /// <param name="modifierUserFullName">Gets or sets the full name of
        /// the modifier user.</param>
        /// <param name="modifierGroupID">Gets or sets the modifier group
        /// identifier.</param>
        /// <param name="modifierGroupName">Gets or sets the name of the
        /// modifier group.</param>
        /// <param name="creationTime">Gets or sets the creation time.</param>
        /// <param name="modificationTime">Gets or sets the modification
        /// time.</param>
        /// <param name="accessTime">Gets or sets the access time.</param>
        /// <param name="resolutionTime">Gets or sets the resolution
        /// time.</param>
        /// <param name="category">Gets or sets the category.</param>
        /// <param name="reservedInt1">Gets or sets the reserved int1.</param>
        /// <param name="reservedInt2">Gets or sets the reserved int2.</param>
        /// <param name="reservedString1">Gets or sets the reserved
        /// string1.</param>
        /// <param name="state">Gets or sets the state. Possible values
        /// include: 'Undefined', 'Available', 'Locked', 'Suspended',
        /// 'Archived', 'Deleted', 'Canceled', 'Complete', 'Reviewed',
        /// 'ReviewedSuspended', 'ReviewedComplete', 'Rejected',
        /// 'RoutingSlipOpen', 'ReviewedRoutingSlipOpen'</param>
        /// <param name="name">Gets or sets the name.</param>
        public EntityModel(IList<ProfileModel> profiles = default(IList<ProfileModel>), int? id = default(int?), int? drawerID = default(int?), int? acl = default(int?), int? type = default(int?), int? subtype = default(int?), int? age = default(int?), int? referenceCount = default(int?), int? accessCount = default(int?), int? profileCount = default(int?), int? attachCount = default(int?), int? noteCount = default(int?), int? ownerUserID = default(int?), string ownerUserFullName = default(string), int? ownerGroupID = default(int?), string ownerGroupName = default(string), int? creatorUserID = default(int?), string creatorUserFullName = default(string), int? creatorGroupID = default(int?), string creatorGroupName = default(string), int? modifierUserID = default(int?), string modifierUserFullName = default(string), int? modifierGroupID = default(int?), string modifierGroupName = default(string), System.DateTime? creationTime = default(System.DateTime?), System.DateTime? modificationTime = default(System.DateTime?), System.DateTime? accessTime = default(System.DateTime?), System.DateTime? resolutionTime = default(System.DateTime?), int? category = default(int?), int? reservedInt1 = default(int?), int? reservedInt2 = default(int?), string reservedString1 = default(string), string state = default(string), string name = default(string))
        {
            Profiles = profiles;
            ID = id;
            DrawerID = drawerID;
            Acl = acl;
            Type = type;
            Subtype = subtype;
            Age = age;
            ReferenceCount = referenceCount;
            AccessCount = accessCount;
            ProfileCount = profileCount;
            AttachCount = attachCount;
            NoteCount = noteCount;
            OwnerUserID = ownerUserID;
            OwnerUserFullName = ownerUserFullName;
            OwnerGroupID = ownerGroupID;
            OwnerGroupName = ownerGroupName;
            CreatorUserID = creatorUserID;
            CreatorUserFullName = creatorUserFullName;
            CreatorGroupID = creatorGroupID;
            CreatorGroupName = creatorGroupName;
            ModifierUserID = modifierUserID;
            ModifierUserFullName = modifierUserFullName;
            ModifierGroupID = modifierGroupID;
            ModifierGroupName = modifierGroupName;
            CreationTime = creationTime;
            ModificationTime = modificationTime;
            AccessTime = accessTime;
            ResolutionTime = resolutionTime;
            Category = category;
            ReservedInt1 = reservedInt1;
            ReservedInt2 = reservedInt2;
            ReservedString1 = reservedString1;
            State = state;
            Name = name;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the profiles.
        /// </summary>
        [JsonProperty(PropertyName = "Profiles")]
        public IList<ProfileModel> Profiles { get; set; }

        /// <summary>
        /// Gets or sets the entity identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ID")]
        public int? ID { get; set; }

        /// <summary>
        /// Gets or sets the drawer identifier.
        /// </summary>
        [JsonProperty(PropertyName = "DrawerID")]
        public int? DrawerID { get; set; }

        /// <summary>
        /// Gets or sets the access control list.
        /// </summary>
        [JsonProperty(PropertyName = "Acl")]
        public int? Acl { get; set; }

        /// <summary>
        /// Gets or sets the type.
        /// </summary>
        [JsonProperty(PropertyName = "Type")]
        public int? Type { get; set; }

        /// <summary>
        /// Gets or sets the subtype.
        /// </summary>
        [JsonProperty(PropertyName = "Subtype")]
        public int? Subtype { get; set; }

        /// <summary>
        /// Gets or sets the age.
        /// </summary>
        [JsonProperty(PropertyName = "Age")]
        public int? Age { get; set; }

        /// <summary>
        /// Gets or sets the reference identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ReferenceCount")]
        public int? ReferenceCount { get; set; }

        /// <summary>
        /// Gets or sets the access count.
        /// </summary>
        [JsonProperty(PropertyName = "AccessCount")]
        public int? AccessCount { get; set; }

        /// <summary>
        /// Gets or sets the profile count.
        /// </summary>
        [JsonProperty(PropertyName = "ProfileCount")]
        public int? ProfileCount { get; set; }

        /// <summary>
        /// Gets or sets the attach count.
        /// </summary>
        [JsonProperty(PropertyName = "AttachCount")]
        public int? AttachCount { get; set; }

        /// <summary>
        /// Gets or sets the note count.
        /// </summary>
        [JsonProperty(PropertyName = "NoteCount")]
        public int? NoteCount { get; set; }

        /// <summary>
        /// Gets or sets the owner user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "OwnerUserID")]
        public int? OwnerUserID { get; set; }

        /// <summary>
        /// Gets or sets the full name of the owner user.
        /// </summary>
        [JsonProperty(PropertyName = "OwnerUserFullName")]
        public string OwnerUserFullName { get; set; }

        /// <summary>
        /// Gets or sets the owner group identifier.
        /// </summary>
        [JsonProperty(PropertyName = "OwnerGroupID")]
        public int? OwnerGroupID { get; set; }

        /// <summary>
        /// Gets or sets the name of the owner group.
        /// </summary>
        [JsonProperty(PropertyName = "OwnerGroupName")]
        public string OwnerGroupName { get; set; }

        /// <summary>
        /// Gets or sets the creator user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "CreatorUserID")]
        public int? CreatorUserID { get; set; }

        /// <summary>
        /// Gets or sets the full name of the creator user.
        /// </summary>
        [JsonProperty(PropertyName = "CreatorUserFullName")]
        public string CreatorUserFullName { get; set; }

        /// <summary>
        /// Gets or sets the creator group identifier.
        /// </summary>
        [JsonProperty(PropertyName = "CreatorGroupID")]
        public int? CreatorGroupID { get; set; }

        /// <summary>
        /// Gets or sets the name of the creator group.
        /// </summary>
        [JsonProperty(PropertyName = "CreatorGroupName")]
        public string CreatorGroupName { get; set; }

        /// <summary>
        /// Gets or sets the modifier user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ModifierUserID")]
        public int? ModifierUserID { get; set; }

        /// <summary>
        /// Gets or sets the full name of the modifier user.
        /// </summary>
        [JsonProperty(PropertyName = "ModifierUserFullName")]
        public string ModifierUserFullName { get; set; }

        /// <summary>
        /// Gets or sets the modifier group identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ModifierGroupID")]
        public int? ModifierGroupID { get; set; }

        /// <summary>
        /// Gets or sets the name of the modifier group.
        /// </summary>
        [JsonProperty(PropertyName = "ModifierGroupName")]
        public string ModifierGroupName { get; set; }

        /// <summary>
        /// Gets or sets the creation time.
        /// </summary>
        [JsonProperty(PropertyName = "CreationTime")]
        public System.DateTime? CreationTime { get; set; }

        /// <summary>
        /// Gets or sets the modification time.
        /// </summary>
        [JsonProperty(PropertyName = "ModificationTime")]
        public System.DateTime? ModificationTime { get; set; }

        /// <summary>
        /// Gets or sets the access time.
        /// </summary>
        [JsonProperty(PropertyName = "AccessTime")]
        public System.DateTime? AccessTime { get; set; }

        /// <summary>
        /// Gets or sets the resolution time.
        /// </summary>
        [JsonProperty(PropertyName = "ResolutionTime")]
        public System.DateTime? ResolutionTime { get; set; }

        /// <summary>
        /// Gets or sets the category.
        /// </summary>
        [JsonProperty(PropertyName = "Category")]
        public int? Category { get; set; }

        /// <summary>
        /// Gets or sets the reserved int1.
        /// </summary>
        [JsonProperty(PropertyName = "ReservedInt1")]
        public int? ReservedInt1 { get; set; }

        /// <summary>
        /// Gets or sets the reserved int2.
        /// </summary>
        [JsonProperty(PropertyName = "ReservedInt2")]
        public int? ReservedInt2 { get; set; }

        /// <summary>
        /// Gets or sets the reserved string1.
        /// </summary>
        [JsonProperty(PropertyName = "ReservedString1")]
        public string ReservedString1 { get; set; }

        /// <summary>
        /// Gets or sets the state. Possible values include: 'Undefined',
        /// 'Available', 'Locked', 'Suspended', 'Archived', 'Deleted',
        /// 'Canceled', 'Complete', 'Reviewed', 'ReviewedSuspended',
        /// 'ReviewedComplete', 'Rejected', 'RoutingSlipOpen',
        /// 'ReviewedRoutingSlipOpen'
        /// </summary>
        [JsonProperty(PropertyName = "State")]
        public string State { get; set; }

        /// <summary>
        /// Gets or sets the name.
        /// </summary>
        [JsonProperty(PropertyName = "Name")]
        public string Name { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (Name != null)
            {
                if (Name.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Name", 255);
                }
                if (Name.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Name", 0);
                }
            }
        }
    }
}
